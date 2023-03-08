<?php

namespace App\Http\Controllers\Frontend;


use Illuminate\Http\Request;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Config;


class AboutController extends FrontendController
{

    function index()
    {
        $this -> page = "page.aboutme";

        $this -> specialMenu = [
            'big_menu' => 'About Me',
            'small_menu' => ''
        ];
        $this -> js = ['contactform/contactform.js'];a
    }
    public function make(){

    }


}