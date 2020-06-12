<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    protected $hidden = array('created_at', 'updated_at');
    
    protected $fillable = ['home_id','user_id','favourite'];
}
