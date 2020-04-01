<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Floors extends Model
{
    protected $fillable = ['home_id','floor_no','bedroom','bathroom','garage','dining','kitchen','image'];
    
}
