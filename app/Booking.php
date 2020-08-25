<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'name','email', 'phone_no','seat','amount','payment_date','status','schedule_id'
    ];
}
