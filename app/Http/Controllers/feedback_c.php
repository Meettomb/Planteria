<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedback;
use App\Models\login_clients;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackMail;
use Illuminate\Support\Facades\Log; // Add this import
use Exception;

class feedback_c extends Controller
{
    //

    public function getuserdetail(){

        if(session()->has('userid')){
            
            $userid = session()->get('userid');
            $user = login_clients::find($userid);
             
            return view('contact',['data'=>$user]);
             
        } else {
            return redirect('/log_new');
        }
    }

    public function save_feedback(Request $req){
        // Prepare feedback data
        $feedback = new Feedback();
        $feedback->name = $req->name;
        $feedback->email = $req->email;
        $feedback->message = $req->message;
    
        // Prepare mail data
        $mail_data = [
            'title' => 'Feedback Received',
            'body' => 'Thank you for your feedback. We have received your message: "' . $req->message . '"',
        ];
    
        // Attempt to send the email
        try {
            Mail::to($req->email)->send(new FeedbackMail($mail_data));
        } catch (Exception $e) {
            Log::error('Email sending failed: ' . $e->getMessage());
            return response()->json(['message' => 'There was an error sending the email. Please try again later.'], 500);
        }
        
    
        // Save feedback to the database
        if ($feedback->save()) {
            return redirect()->route('contact')->with('success', 'Your feedback has been sent.');
        } else {
            return redirect()->back()->withErrors(['error' => 'Failed to save and send your feedback']);
        }
    }

    public function get_all_feedback(){
        $info = Feedback::all();
        return view('all_feedback_list',['info'=>$info]);
    }

    public function show_one_feedback($id){
        $data = Feedback::find($id);
        return view('See_full_feedback',['data'=>$data]);
    }
}
