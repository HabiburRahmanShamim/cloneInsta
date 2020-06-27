<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowsController extends Controller
{
    public function store(User $user)
    {
//        On button click
//        If not following then attach this user->profile to authenticated user (mark as following)
//        Otherwise detached this user->profile from authenticated user(mark as unfollowing)
        return Auth::user()->following()->toggle($user->profile);
    }
}
