<?php

namespace App\Http\Controllers;

use App\Traits\ClassNames;

use App\Http\Controllers\TemplateEntry;

class EntryPoint extends TemplateEntry
{
    public function setClass($controller)
    {

        $this -> class = $this-> getClassNameSpace() . '\\'  . 'Frontend' . '\\' .  ucfirst( $this -> camelize($controller) ) . $this->controller_suffix;
    }


}
