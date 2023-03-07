<?php

namespace App\Http\Controllers\Frontend;


use Illuminate\Http\Request;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Config;

class ContactController extends FrontendController
{

    function index()
    {
        $this -> page = "page.contact";

        $this -> specialMenu = [
            'big_menu' => 'Contact Me',
            'small_menu' => 'Contact with Oliver'
        ];
    }
    public function make(){

    }
   
}