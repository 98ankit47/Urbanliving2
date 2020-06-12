<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Features extends Model
{
    protected $hidden = array('created_at', 'updated_at');
    
    protected $fillable = ['title','image','home_id'];

    public function homes()
    {
        return $this->belongsTo('App\Models\Homes');
    }
}
