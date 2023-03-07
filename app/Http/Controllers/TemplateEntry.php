<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TemplateEntry
{
    protected $class;
    protected $controller_suffix = "Controller";
    public function getClassNameSpace(){
        return  ( new \ReflectionClass( $this ) )->getNamespaceName();
    }
    protected function setClass($controller){}

    public function callClass($controller = "home", $func = 'index', $para = null)
    {
        $this -> setClass($controller);
        $class = $this -> class;
        $inst = new $class();
        if (request() -> ajax()){
            $func .= "_ajax";
            if($para != null)
                return response()->json($inst -> $func($para));
            else
                return response()->json($inst -> $func());
        }
        else if(request() -> method() == 'POST'){
            $func .= "_post";
            $redirectResponse = null;
            if($para != null)
                $redirectResponse = $inst -> $func($para);
            else
                $redirectResponse = $inst -> $func();
            return $redirectResponse;
        }
        else{
            $redirectResponse = null;
            if($para != null)
                $redirectResponse = $inst -> $func($para);
            else
                $redirectResponse = $inst -> $func();

            if($redirectResponse != false && $redirectResponse != null)
                return $redirectResponse;
            $inst -> prepareTemplate();
            $inst -> make();
            return $inst -> respond();
        }

    }

    function camelize($input, $separator = '_')
    {
        return str_replace($separator, '', ucwords($input, $separator));
    }
}
