<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FloorComponent extends Model
{
    protected $fillable = ['floor_id','component_no','name','image','type'];
}
