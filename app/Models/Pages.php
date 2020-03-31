<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    //
    protected $table = 'pages';
    protected $fillable = ['title','meta_title','meta_description','description','slug','featured_image',
        'type','relative_id'
];
}
