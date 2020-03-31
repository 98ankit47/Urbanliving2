<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Homes extends Model
{
    protected $fillable = ['title','status_id','description','bedroom','bathroom','garage','stories','mls','featured_image','gallery','builder','area','builder','slug','meta_description','meta_title'];
}
