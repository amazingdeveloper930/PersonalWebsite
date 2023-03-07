<?php

namespace App\Http\Controllers\Frontend;


use Illuminate\Http\Request;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Config;
use App\Models\Tags;
use App\Models\Projects;

class PortfolioController extends FrontendController
{

    function index()
    {
        $this -> page = "page.portfolio";

        $this -> specialMenu = [
            'big_menu' => 'Portfolio Page',
            'small_menu' => 'Please check my past work on here'
        ];
        $tags = Tags::all();
        $params = array();
        $params['tags'] = $tags;
        $this -> params = array_merge($this -> params, $params);
        $this -> js = ['portfolio/jquery.quicksand.js', 'portfolio/setting.js', 'hover/jquery-hover-effect.js', 'hover/setting.js'];
    }

    function details($project_id)
    {
        $this -> page = "page.portfolio_detail";

        $this -> specialMenu = [
            'big_menu' => 'Portfolio',
            'small_menu' => 'portfolio Details page'
        ];


        $project = Projects::where('id', $project_id)
                 -> first();
        $params = array();
        $params['project'] = $project;
        $this -> params = array_merge($this -> params, $params);
    }

    public function make(){

    }
   
}