<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Floors extends Model
{
    protected $hidden = array('created_at', 'updated_at');

    protected $fillable = ['home_id','floor_no','bedroom','bathroom','garage','dining','kitchen','image'];
    
    public function homes()
    {
        return $this->belongsTo('App\Models\Homes');
    }
    
}
