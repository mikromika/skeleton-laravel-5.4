<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Profile extends Authenticatable
{
    use Notifiable;
        //
          protected $table = 'profiles';

          protected $fillable = [
              'firstname',
               'lastname',
        //       'email',
        //       'phone',
        //       'mobile',
                // 'name', 'email', 'password',
          ];


    //      protected $hidden = [
    //          'status',
              //'location',
      //    ];
    }
