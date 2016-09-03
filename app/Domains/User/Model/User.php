<?php

namespace App\Domains\User\Model;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class User extends Model implements
    AuthenticatableContract,
    AuthorizableContract
{
    use Authenticatable, Authorizable;

    protected $fillable = [
        'name', 'email', 'id', 'password', 'role', 'api_key', 'api_secret', 'status'
    ];


    protected $hidden = [
        'password',
    ];
}
