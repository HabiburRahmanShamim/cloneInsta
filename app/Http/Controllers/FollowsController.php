<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Scalar\String_;

class FollowsController extends Controller
{
//    User needs to login before any follow/unfollow work
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(User $user)
    {
//        On button click
//        If not following then attach this user->profile to authenticated user (mark as following)
//        Otherwise detached this user->profile from authenticated user(mark as unfollowing)
        return Auth::user()->following()->toggle($user->profile);
    }
    public function search(Request $req)
    {
        $dt = $req->text;
        $user = User::query()->where('username', 'LIKE', '%'.$dt.'%')->get();

        return $user;
    }
}
