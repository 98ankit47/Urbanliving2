<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Homes extends Model
{ 
    protected $hidden = array('created_at', 'updated_at');
    
    protected $fillable = ['title','price','block','status_id','lat','lng',
    'description','bedroom','bathroom','garage','stories','type','featured_image',
    'gallery','builder','area','builder','slug'];
    
    public function communities(){
    	return $this->hasOne('App\Models\HomeCommunity','home_id')->with('communities');
    }
    public function feature(){
    	return $this->hasMany('App\Models\Features','home_id')->with('homes');
    }

    public function floor(){
    	return $this->hasMany('App\Models\Floors','home_id')->with('homes');
    }
}
