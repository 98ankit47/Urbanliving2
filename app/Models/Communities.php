<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Communities extends Model
{
    protected $hidden = array('created_at', 'updated_at');
    
    protected $fillable = ['title','address','image','description','area','subdivission','city','county','zipcode','state','boundry'];

    public function homes(){
    	return $this->hasMany('App\Models\HomeCommunity','community_id')->with('homes');
    }
}
