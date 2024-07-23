<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login_clients;
use App\Models\cart;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Mail;
use App\Mail\Emailstuff;
use log;

class login_controller extends Controller
{
    //
    public function register(Request $req)
    {
        // Validate the request data
        $validatedData = $req->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|string|max:50',
            'dob' => 'required|date',
            'email' => 'required|string|email|max:255|unique:login_clients',
            'phone' => 'required|string|max:10|min:10|unique:login_clients',
            'address' => 'required|string|max:255',
            'pincode' => 'required|string|max:6|min:6',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Check if email or phone number already exists
        $existingUser = login_clients::where('email', $req->email)
                                    ->orWhere('phone', $req->phone)
                                    ->first();

        if ($existingUser) {
            return redirect()->back()->withErrors(['email_or_phone' => 'Email or phone number already exists.'])->withInput();
        }

        $data = new \stdClass();
        $data->first_name = $req->first_name;
        $data->last_name = $req->last_name;
        $data->gender = $req->gender;
        $data->dob = $req->dob;
        $data->email = $req->email;
        $data->phone = $req->phone;
        $data->address = $req->address;
        $data->pincode = $req->pincode;
        $data->password = $req->password;

        $otp = rand(100000, 999999);
        $mail_data = [
            'title' => 'Your OTP Code',
            'body' => $otp,
        ];
        try {
            Mail::to($data->email)->send(new Emailstuff($mail_data));
        } catch (Exception $e) {
            Log::error('Email sending failed: ' . $e->getMessage());
            return response()->json(['message' => 'There was an error sending the email. Please try again later.'], 500);
        }

        $json_data = json_encode($data);

        return view('otppage')->with(['data' => $json_data, 'otp' => $otp]);
    }

    public function checkotp(Request $req)
    {
        $otpSubmitted = $req->input('otp');
        $data = json_decode($req->input('data'));
        $otpValue = $req->input('otp_value');

        if ($otpSubmitted == $otpValue) {
            $client = new login_clients();

            $client->first_name = $data->first_name;
            $client->last_name = $data->last_name;
            $client->gender = $data->gender;
            $client->dob = $data->dob;
            $client->email = $data->email;
            $client->phone = $data->phone;
            $client->address = $data->address;
            $client->pincode = $data->pincode;
            $client->password = Hash::make($data->password);

            if ($client->save()) {
                return redirect()->route('log_new'); // Redirect using the named route
            } else {
                return redirect()->back()->withErrors(['db' => 'Failed to save user data.']);
            }
        } else {
            return redirect()->back()->withErrors(['otp' => 'Invalid OTP.']);
        }
    }

        
    
    
    public function login_wall(Request $req){
        $data=login_clients::where('email',$req->email)->get();
        $logout="";
        if($data->isNotEmpty()){
            if(Hash::check($req->password,$data[0]->password)){ 
                // Hash::check($req->Password,$data[0]->Password)
                if($data[0]->role=='user'){
                    $req->session()->put('user',$data[0]->first_name);
                    $req->session()->put('userid',$data[0]->id);
                    
                    $count = cart::where('uid',$data[0]->id)->count();
                    $req->session()->put('count',$count);
                
                    return redirect()->back();
                }
                if($data[0]->role=='admin'){
                    $req->session()->put('admin',$data[0]->first_name);
                    return redirect('/admin_index');
                }
            }else{
                return redirect()->back()->with('pass_error','Password dose not match');
            }
        }else{
            return redirect()->back()->with('email_error','Email dose not match');
        }
    }

    public function login_list(){
        $data = login_clients :: all();
        return view('all_login_list',['data'=>$data]);
    }
}