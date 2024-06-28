<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login_clients;
use App\Models\cart;
use Illuminate\Support\Facades\Hash;

class login_controller extends Controller
{
    //
    public function login(Request $req)
    {
        $data = new login_clients();

        // $req->validate( [
        //     'first_name' => 'required|max:255',
        //     'last_name' => 'required|max:255',
        //     'gender' => 'required|in:male,female',
        //     'dob' => 'required|date|before:today',
        //     'email' => 'required|email',
        //     'phone' => 'required|digits:10',
        //     'address' => 'required|string',
        //     'pincode' => 'required|digits:6',
        // ]);

        $data->first_name=$req->first_name;
        $data->last_name= $req->last_name;
        $data->gender=$req->gender;
        $data->dob=$req->dob;
        $data->email=$req->email;
        $data->phone=$req->phone;
        $data->address=$req->address;
        $data->pincode=$req->pincode;
        $data->password=Hash::make($req->password);
        
        // $info->Password=Hash::make($req->Password);

        
        $id=$data->save();

        if($id>0)
        {
            // $req->session()->put('user',$req->first_name);
            return redirect('/log_new');
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