<?php

namespace App\Http\Controllers;

use App\Traits\ClassNames;
use App\Services\Config\TemplateConfig;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

abstract class TemplateController extends Controller
{
    protected $css = [];
    protected $js  = [];
    protected $bottomJs = [];
    protected $bottomCss = [];
    protected $page = "";
    protected $params = [];
    protected $theme = "";
    protected $template = "";
    protected $tplConfig;
    protected $specialMenu = null;
    protected $description = null;


    public function __construct()
	{
		$this->before();
    }

    protected function notification( $message, $level = null )
	{
		// Session::flash('notification', $message);
		// !$level OR Session::flash('notification-class', $level);

		session() -> put('notification', $message);
		!$level OR session() -> put('notification-class', $level);
    }

    public   function prepareTemplate()
	{
        $this->setTheme();
        $this->setTemplateName();
        $this->setParams();

		// $this->tplConfig = TemplateConfig::instance(
		// 	config('styles'),
		// 	config('scripts'),
		// 	$this->getConfigs()
		// );
        $this->tplConfig = TemplateConfig::instance(array(), array(), $this->getConfigs());

		View::share( 'tplConfig', $this->tplConfig );

		$this->tplConfig->style = $this->css;

        $this->tplConfig->script = $this->js;

        $this->tplConfig->bottomJs = $this -> bottomJs;
        $this->tplConfig->bottomCss = array_merge(['template.css'], $this -> bottomCss);
    }

    protected function getConfigs()
	{
		return [
            'theme'         => $this -> theme,
            'template'      => $this -> template,
            'specialMenu'   => $this -> specialMenu,
            'description'   => $this -> description
		];
    }
    public function respond(){
        return view( $this->page )->with( $this->params );
    }

    
	protected function callRestAPI($method, $url, $data = false)
	{
		$curl = curl_init();

		switch ($method)
		{
			case "POST":
				curl_setopt($curl, CURLOPT_POST, 1);

				if ($data)
					curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
				break;
			case "PUT":
				curl_setopt($curl, CURLOPT_PUT, 1);
				break;
			default:
				if ($data)
					$url = sprintf("%s?%s", $url, http_build_query($data));
		}

		// Optional Authentication:
		curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($curl, CURLOPT_USERPWD, "username:password");

		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

		$result = curl_exec($curl);

		curl_close($curl);

		return $result;
	}

	public function callAPI($method, $url, $data = false)
	{
		$url = env('API_URL') . $url;
		return $this -> callRestAPI($method, $url, $data);
	}


    protected function before() {}
    protected function setTemplateName(){}
    protected function setTheme(){}
    protected function make(){}
    protected function setParams(){}


}
