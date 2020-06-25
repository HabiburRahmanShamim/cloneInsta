<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class profilesController extends Controller
{
    //No need to login to see profile
    public function index($profile_id)
    {
        $user = User::find($profile_id); // finding this profile id in User table
        return view('home', [
            'user' => $user,
        ]); // Calling for show with user information instance variable as 'user'
    }
}
