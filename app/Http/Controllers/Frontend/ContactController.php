<?php

namespace App\Http\Controllers\Frontend;


use Illuminate\Http\Request;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Config;
use App\Models\Message;


class ContactController extends FrontendController
{

    function index()
    {
        $this -> page = "page.contact";

        $this -> specialMenu = [
            'big_menu' => 'Contact Me',
            'small_menu' => 'Contact with Oliver'
        ];

        $this -> js = ['contactform/contactform.js'];
    }

    function sendmessage_ajax()
    {
        $message = new Message();
        $message -> name    = $_POST['name'];
        $message -> email   = $_POST['email'];
        $message -> subject = $_POST['subject'];
        $message -> message = $_POST['message'];
        $message -> save();
        return 'OK';

    }
    public function make(){

    }
   
}