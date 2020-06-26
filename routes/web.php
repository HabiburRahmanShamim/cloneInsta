<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Routing "/profile/user_id" link to profilesController file
Route::get('/profile/{user}', 'profilesController@index')->name('profile.show');

//Routing post create
Route::get('/p/create', 'PostsController@create');


//Routing single post view
Route::get('/p/{post}', 'PostsController@show');

//Routing add post data from add post form
Route::post('/p', 'PostsController@store');

