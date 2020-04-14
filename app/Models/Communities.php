<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Communities extends Model
{
    protected $fillable = ['title','address','area','subdivission','city','county','zipcode','state'];

    public function homes(){
    	return $this->hasMany('App\Models\HomeCommunity','community_id')->with('homes');
    }
}
