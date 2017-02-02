<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Profile;
use App\ProfileUser;

class User extends Authenticatable
{
    use Notifiable;

    //protected $profile();
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // each user may have many profiles
    public function profiles()
     {
        return $this->hasMany('Profile','\App\Profile','user_id');
    }






}  // end of class
