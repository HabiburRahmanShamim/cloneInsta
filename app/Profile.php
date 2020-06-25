<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // Every profile belongs to one user
    // this function will return the information
    // of this profile's user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
