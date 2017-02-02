<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Profile;

class ProfileUser extends Model
{

    protected $table = 'profile_users';

    protected $fillable = [
        'profile_id',
         'user_id',
    //'profile_id', 'user_id'
    ];



} // end of class
