<?php

namespace App\Http\Controllers\Frontend;


use Illuminate\Http\Request;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Config;

use App\Models\Projects;
use App\Models\Message;
use Carbon\Carbon;

class HomeController extends FrontendController
{

    function index()
    {
        $this -> page = "page.home";

        $this -> specialMenu = [
            'big_menu' => 'Home',
            'small_menu' => 'Privacy Policy'
        ];
        $projects = Projects::limit(4) -> orderBy('id', 'DESC') -> get();
        $params = array();
        $params['projects'] = $projects;
        $params['message_count'] = Message::whereDate('created_at', Carbon::today())->count();
        $this -> params = array_merge($this -> params, $params);
        $this -> js = ['portfolio/jquery.quicksand.js', 'portfolio/setting.js', 'hover/jquery-hover-effect.js', 'hover/setting.js'];
    }
    public function make(){

    }
   
}