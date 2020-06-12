<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsLetter extends Model
{
    protected $hidden = array('created_at', 'updated_at'); 
    
    protected $fillable = ['email','name'];

}
