<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $fillable = [
        'name', 
        'description', 
        'location',
        'budget'
    ];
}
