<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\login_clients;
use Illuminate\Support\Facades\Mail;
use App\Mail\Emailstuff;
use Illuminate\Support\Facades\Hash;

class ForgatePasswordController extends Controller
{

    public function send_email(Request $req)
{
    $email = $req->input('email');
    $user = login_clients::where('email', $email)->first();

    if (!$user) {
        return redirect()->back()->with('error', 'Email not found');
    }

    // Generate OTP
    $otp = rand(100000, 999999);
    $req->session()->put('otp', $otp); // Store OTP in the session

    $mail_data = [
        'title' => 'Your OTP Code',
        'body' => 'Your OTP is ' . $otp . '. It is valid until used.',
    ];

    try {
        Mail::to($user->email)->send(new Emailstuff($mail_data));
    } catch (Exception $e) {
        return redirect()->back()->with('error', 'Failed to send email. Please try again.');
    }

    return view('verify_forgot_password_otp', ['email' => $email]);
}

    
    public function verify_otp(Request $req)
    {
        $email = $req->input('email');
        $otpSubmitted = $req->input('otp');
        $storedOtp = $req->session()->get('otp');
    
        if ($storedOtp == $otpSubmitted) {
            // OTP is valid
            $req->session()->forget('otp'); // Remove OTP from the session
            return redirect()->route('forgot_password', ['email' => $email]); // Redirect to the password reset form
        } else {
            // Redirect back with an error if OTP is invalid
            return redirect()->back()->with('error', 'Invalid OTP');
        }
    }
    

    public function forgot_password(Request $req)
    {
        $email = $req->input('email'); // Use input() to get query parameter
        // Handle the email parameter as needed
        return view('forgot_password', ['email' => $email]); // Pass email to the view
    }
    

 

    public function update_password(Request $req)
    {
        $email = $req->input('email');
        $password = $req->input('password');

        $user = login_clients::where('email', $email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Email not found');
        }

        $user->password = Hash::make($password);
        $user->save();

        return redirect()->route('log_new')->with('success', 'Password updated successfully');
    }
}
