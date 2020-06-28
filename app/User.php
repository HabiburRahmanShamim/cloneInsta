<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    protected static function boot()
    {
        parent::boot();
        // created() will be called when a user will be created
        static::created(function ($user){
            $user->profile()->create([
                'title' => $user->username,
            ]);
        });
    }

    //Every user have exactly one profile
    // this function will return the information
    // of this user's profile

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    //A user can have many posts
    public function posts()
    {
        return $this->hasMany(Post::class)->orderBy('created_at', 'DESC');
    }

    //A User will follow many Profile
    public function following()
    {
        return $this->belongsToMany(Profile::class);
    }
}
