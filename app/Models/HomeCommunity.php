<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;

class HomeCommunity extends Model
{
    protected $fillable = ['home_id','community_id'];

    public function communities()
    {
        return $this->belongsTo('App\Models\Communities','community_id');
    }
    public function homes()
    {
        return $this->belongsTo('App\Models\Homes');
    }
}
