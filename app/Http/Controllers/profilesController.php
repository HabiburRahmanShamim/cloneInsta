<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class profilesController extends Controller
{
    //No need to login to see profile
//    public function index($profile_id)
//    {
//        $user = User::findOrFail($profile_id); // finding this profile id in User table
//        return view('profile/index', [
//            'user' => $user,
//        ]); // Calling for show with user information instance variable as 'user'
//    }
//    or we could do like this
    public function index(\App\User $user)
    {
        //it will do auto validation
        return view('profile/index', compact('user')); // Calling for show with user information instance variable as 'user'
    }

    public function edit(\App\User $user)
    {
        return view('profile/edit', compact('user')); // Calling for show with user information instance variable as 'user'
    }

    public function update(\App\User $user)
    {
        $data = request()->validate([
           'title' => 'required',
           'description' => 'required',
           'url' => 'url',
            'image' => 'image',
        ]);

        $user->profile->update($data);

        return redirect("/profile/{$user->id}");
    }
}


