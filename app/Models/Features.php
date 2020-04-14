<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Features extends Model
{
    protected $fillable = ['title','image','home_id'];

    public function homes()
    {
        return $this->belongsTo('App\Models\Homes');
    }
}
