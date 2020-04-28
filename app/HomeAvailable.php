<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeAvailable extends Model
{
    protected $fillable = ['home_id','lat','lng'];
}
