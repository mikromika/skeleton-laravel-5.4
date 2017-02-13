<?php


namespace App;

use Cartalyst\Sentinel\Permissions\PermissibleInterface;
use Cartalyst\Sentinel\Permissions\PermissibleTrait;
use Cartalyst\Sentinel\Persistences\PersistableInterface;
use Cartalyst\Sentinel\Roles\RoleableInterface;
use Cartalyst\Sentinel\Roles\RoleInterface;
use Illuminate\Database\Eloquent\Model;
use Cartalyst\Sentinel\Users;
use Cartalyst\Sentinel\Users\EloquentUser;

class SentinelUser extends EloquentUser
{
    use PermissibleTrait;

    /**
     * {@inheritDoc}
     */
    protected $table = 'users';

    /**
     * {@inheritDoc}
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
