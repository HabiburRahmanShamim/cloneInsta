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


Auth::routes();


//If multiple link has same name then we have to maintain order.


//Route::get('/', 'HomeController@index')->name('home');

//Routing "/profile/user_id" link to profilesController file
Route::get('/profile/{user}', 'profilesController@index')->name('profile.show');

//Routing "/profile/user_id/edit" link to profilesController file
Route::get('/profile/{user}/edit', 'profilesController@edit')->name('profile.edit');

//Routing "/profile/user_id" link from patch to profilesController file for updating profile info
Route::patch('/profile/{user}', 'profilesController@update')->name('profile.update');



// Routing the page after login
Route::get('/', 'PostsController@index');

//Routing post create
Route::get('/p/create', 'PostsController@create');

//Routing single post view
Route::get('/p/{post}', 'PostsController@show');

//Routing add post data from add post form
Route::post('/p', 'PostsController@store');


//Routing follow user button click sent via axios.post() with link path /follow/{id}
Route::post('/follow/{user}', 'FollowsController@store');

Route::post('/search/{text}', 'FollowsController@search');
