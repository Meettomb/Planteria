<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Controllers\Controller;
use Illuminate\Support\Fascades\Session;
use Carbon\Carbon;
use App\Models\users;

use Illuminate\Support\Fascades\Mail;
use App\Mail\Emailstuff;

class ForgatePasswordController extends Controller
{
    public function send_email(Request $req){
        $otp = rand(100000, 999999);
        // $otp_expiration = Carbon::now()->addMinutes(15);

        // $user->otp = $otp;
        // $user->otp_expiration = $otp_expiration;
        $user->save();

        $mail_data = [
            'title' => 'Your Otp Code',
            'body' => 'Your otp is' .$otp.'. It is valid for 15 minutes',
        ];
        Mail::to($user->email)->send(new SendMail($mail_data));
        return redirect()->route('');

    }
}
