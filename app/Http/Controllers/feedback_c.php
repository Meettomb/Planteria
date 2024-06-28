<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedback;

class feedback_c extends Controller
{
    //
    public function feedback(Request $req)
    {
        $fb = new feedback();

        $fb->name=$req->name;
        $fb->email=$req->email;
        $fb->phone=$req->phone;
        $fb->subject=$req->subject;
        $fb->message=$req->message;

        $id=$fb->save();
        
            return redirect('contact');
    }
}
