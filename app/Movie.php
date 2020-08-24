<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'name','duration', 'language','photo','start_date','end_date'
    ];
}
