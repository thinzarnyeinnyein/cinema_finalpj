<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'name','email', 'email_verified_at','password','remember_token'
    ];
}
