<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectTag extends Model
{
    //
    public $table = "project_tag";
    public $timestamps = false;
    protected $fillable = [
        'project_id', 'tag_id'
    ];



    
}
