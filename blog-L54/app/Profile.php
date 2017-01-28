<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\User;

class Profile extends Authenticatable
{
    use Notifiable;
        //
          protected $table = 'profiles';

          protected $fillable = [
              'firstname',
               'lastname',
        //       'email',
                'phone',
                'mobile',
                // 'name', 'email', 'password',
          ];

             // each profiles BELONGS to many users, security, etc...
             // define our pivot table also
      //       public function users() {
      //           return $this->belongsToMany('user', 'users_profiles', 'user_id', 'profile_id');
      //       }




    // each user may have many profiles
  //    public function users()
  //      {
  //        return $this->hasOne('User');
  //      }
      // DEFINE RELATIONSHIPS --------------------------------------------------
        public function users() {
            return $this->belongsTo('User');
        }


        // DEFINE RELATIONSHIPS --------------------------------------------------
      // define a many to many relationship
      // also call the linking table
      public function profiles()
       {
          return $this->belongsToMany('Profile', 'profiles_users', 'profile_id', 'user_id');
        }

    //      protected $hidden = [
    //          'status',
              //'location',
      //    ];



    } // end of class
