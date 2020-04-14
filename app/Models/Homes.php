<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Homes extends Model
{
    protected $fillable = ['title','status_id','description','bedroom','bathroom','garage','stories','mls','featured_image','gallery','builder','area','builder','slug'];
    
    public function communities(){
    	return $this->hasOne('App\Models\HomeCommunity','home_id')->with('communities');
    }
    public function feature(){
    	return $this->hasMany('App\Models\Features','home_id')->with('homes');
    }
}
