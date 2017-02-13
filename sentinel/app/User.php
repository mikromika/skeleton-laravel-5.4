<?php

namespace App;

use Illuminate\Notifications\Notifiable;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Cartalyst\Sentinel\Users\EloquentUser;

// class User extends Authenticatable
class User extends EloquentUser
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'email',
      'password',
      'last_name',
      'first_name',
      'permissions',
      'username',
    ];

    protected $loginNames = ['username'];
    // protected $loginNames = ['email']; // Default Sentinel

    public function getLoginNames()
    {
        return $this->loginNames;
    }

    public function getUserLogin()
    {
        return $this->getAttribute($this->getUserLoginName());
    }

    /**
     * {@inheritDoc}
     */
    public function getUserLoginName()
    {
        return reset($this->loginNames);
    }
  };   // end of class


      //  'name', 'email', 'password',
  //  ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * 
     */
  //  protected $hidden = [
  //      'password', 'remember_token',
  //  ];
//}
