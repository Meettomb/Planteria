<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login_clients;
use App\Models\cart;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Mail;
use App\Mail\Emailstuff;

class login_controller extends Controller
{
    //
    public function login(Request $req)
    {
        $data = new login_clients();

        $data->first_name=$req->first_name;
        $data->last_name= $req->last_name;
        $data->gender=$req->gender;
        $data->dob=$req->dob;
        $data->email=$req->email;
        $data->phone=$req->phone;
        $data->address=$req->address;
        $data->pincode=$req->pincode;
        $data->password=$req->password;
        
        $otp = rand(100000, 999999);
        $mail_data = [
            'title' => 'Your Otp Code',
            'body' => 'Your otp is' .$otp.'. It is valid for 15 minutes',
        ];
        try{
            
            Mail::to($data->email)->send(new Emailstuff($mail_data));
        }catch (Exception $e) { 
            // Log the exception message or handle it appropriately
            Log::error('Email sending failed: ' . $e->getMessage());
            // Optionally, you can echo or return a user-friendly message
            echo 'There was an error sending the email. Please try again later.';
        }
        
        return view('/otppage')->with('data',$data)->with('otp',$otp);
        
        // $id=$data->save();

    }


    public function checkotp(Request $req){
        $otpSubmitted = $req->input('otp');
        $data = json_decode($req->input('data')); // Decode the JSON data
        $otpValue = $req->input('otp_value');
    
        // Now you can use $data, $otpSubmitted, and $otpValue for your logic
        // Example: Validate the OTP
        if ($otpSubmitted == $otpValue) {
            // OTP is valid, proceed with your logic
            $client = new login_clients();

            // Assign values from the decoded data to the model's attributes
            $client->first_name = $data->first_name;
            $client->last_name = $data->last_name;
            $client->gender = $data->gender;
            $client->dob = $data->dob;
            $client->email = $data->email;
            $client->phone = $data->phone;
            $client->address = $data->address;
            $client->pincode = $data->pincode;
            $client->password = Hash::make($req->input('password'));


            $id=$client->save();
            if($id > 0){
                return redirect()->route(''); // Redirect to a success page
            }
        } else {
            // OTP is invalid, handle the error
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