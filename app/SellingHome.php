<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SellingHome extends Model
{
    protected $fillable = ['name','email','address','city','state','zip','price','bedroom',
    'bathroom','squareft','time','seen','featured_image','gallery','type'];
}
