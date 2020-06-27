<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $guarded = []; // Like fillable


    public function profileImage()
    {
        $imagepath = ($this->image) ? ($this->image) : "defaultImage.svg";
        return "/storage/" . $imagepath;
    }

    // Every profile belongs to one user
    // this function will return the information
    // of this profile's user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //A Profile has many followers of User
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
