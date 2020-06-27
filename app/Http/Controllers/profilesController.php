<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use Intervention\Image\Facades\Image;

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
        $this->authorize('update', $user->profile); // Authorizing with policy given in ProfilePolicy@update

        return view('profile/edit', compact('user')); // Calling for show with user information instance variable as 'user'
    }

    public function update(\App\User $user)
    {
        $this->authorize('update', $user->profile); // Authorizing with policy given in ProfilePolicy@update

        $data = request()->validate([
           'title' => 'required',
           'description' => 'required',
           'url' => 'url',
            'image' => '',
        ]);


        if (request('image'))
        {
            // Store image to storage upload directory and Returns file path
            $imagePath = request('image')->store('profile', 'public');
            // Fit the image and save it to the given folder
            $image = Image::make(public_path("/storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();

            $imageArray = ['image' => $imagePath];
        }


        $user = Auth::user();
        $user->profile->update(array_merge(
            $data,
            ($imageArray) ?? []
        ));


        return redirect("/profile/{$user->id}");
    }
}


