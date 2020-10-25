<?php
namespace App\Process;

use App\Controllers\NotFoundContrller;

class FrontControl{

    public $controller  = 'index';
    public $action      = 'home';
    public $param       =   [];
    public $_template;
    private $_auth;
    
    public function __construct(Template $template , Authentication $auth)
    {
        $this->_parseurl();
        $this->_template = $template;
        $this->_auth = $auth;
    }
    private function _parseurl()
    {
        $url = explode('/',trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH)),6);
        
        if(isset($url[1])&& $url[3] != ''){
            
           $this->controller = $url[3];
           

       }
        if(isset($url[4])&& $url[4] != ''){

            $this->action = $url[4];
          
        }
        if(isset($url[5])&& $url[5] != ''){
            $this->param = explode('/',$url[5]);
        }

    }

    public function dispatch()
    {
        $controllerClassName = 'App\Controllers\\'.$this->controller."Controller";



        if( $this->controller == 'login' || $this->controller == 'register' || $this->controller == 'logout' ):
            $controllerClassName = 'App\Controllers\Auth\\'.$this->controller."Controller";
        endif;
        $actionName = $this->action ;
        if(!class_exists($controllerClassName) || !method_exists($controllerClassName, $actionName)) {
            $controllerClassName = 'App\Controllers\notfoundController';

        }

        $controllers = new $controllerClassName();



        $controllers->setController($this->controller);
        $controllers->setAction($this->action);
        $controllers->setParam($this->param);
        $controllers->setTemplate($this->_template);
        $controllers->setauthh($this->_auth);

        $controllers->$actionName();

    }







}