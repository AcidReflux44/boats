<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function boats()
    {
        return $this->belongsToMany('App\Boat');
    }

    /**
     * @return bool Si l'utilisateur est un administrateur
     */
    public function isAdmin() : bool
    {
        return Role::findPrivilege($this->id) == Role::ROLE_ADMIN;
    }

    /**
     * @return bool Si l'utilisateur est un gestionnaire de port
     */
    public function isManager() : bool
    {
        return Role::findPrivilege($this->id) == Role::ROLE_MANAGER;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
