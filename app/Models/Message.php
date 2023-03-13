<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Message extends Model
{
    //
    public $table = "message";
    protected $fillable = [
        'name', 'email', 'subject', 'message'
    ];

   
}
