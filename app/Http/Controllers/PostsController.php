<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    //For post create
    public function create()
    {
        return view('posts/create');
    }

    //For post store
    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);

        $imagePath = request('image')->store('uploads', 'public'); // Store image to storage upload directory and Returns file path

        $user = Auth::user();
        $user->posts()->create([
            'caption' => $data['caption'],
            'image' => $data['image'],
        ]);

        return redirect('/profile/' . $user->id);
    }
}
