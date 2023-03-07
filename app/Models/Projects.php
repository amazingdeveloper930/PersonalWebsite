<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProjectImages;
use App\Models\Tags;

class Projects extends Model
{
    //
    public $table = "projects";
    public $timestamps = false;
    protected $fillable = [
        'title', 'url', 'description', 'start_date', 'end_date', 'skills', 'sort_order'
    ];
    function images()
    {
        return $this -> hasMany('App\Models\ProjectImages', 'project_id');
    }

    function mainImage()
    {
        return ProjectImages::where('project_id', $this -> id)
                    -> where('mode', 'Main')
                    -> first();
    }

    function bigImage()
    {
        return ProjectImages::where('project_id', $this -> id)
                    -> where('mode', 'Big')
                    -> first();
    }

    function normalImage()
    {
        return ProjectImages::where('project_id', $this -> id)
                    -> where('mode', 'Normal')
                    -> get();
    }

    function tags()
    {
        return $this -> belongsToMany(Tags::class, 'project_tag', 'project_id', 'tag_id');
    }


}
