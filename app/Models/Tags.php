<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProjectTag;
use App\Models\Projects;
use App\Models\Tags;

class Tags extends Model
{
    //
    public $table = "tags";
    public $timestamps = false;
    protected $fillable = [
        'title'
    ];

    function projects()
    {
        return $this -> belongsToMany(Projects::class, 'project_tag', 'tag_id', 'project_id');
    }
}
