<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $fillable=['email','password','name'];

    protected $guard='admin';


    protected $hidden = [
        'password', 'remember_token',
    ];
}
?>