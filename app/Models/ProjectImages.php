<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectImages extends Model
{
    //
    public $table = "project_images";
    public $timestamps = false;
    protected $fillable = [
        'project_id', 'caption', 'path', 'mode', 'sort_order'
    ];

    
}
