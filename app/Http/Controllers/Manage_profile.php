<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\LoginClient;

class Manage_profile extends Controller
{
    //
    public function showProfile()
    {
        // Assuming you have a way to get the logged-in user's ID
        $userId = Auth::id(); // or however you are storing the user ID in the session

        // Fetch the user data from the database
        $user = LoginClient::find($userId);

        return view('/header', ['user' => $user]);
    }
}
