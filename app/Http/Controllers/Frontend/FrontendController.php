<?php

namespace App\Http\Controllers\Frontend;

use App\Traits\ClassNames;
use App\Http\Controllers\TemplateController;
use App\Services\Config\TemplateConfig;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

abstract class FrontendController extends TemplateController
{

    protected function setTemplateName(){
        $this -> template = 'theme.main';
    }
    protected function setTheme(){
        
    }


}
