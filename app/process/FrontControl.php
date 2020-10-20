<?php
namespace App\Process;

use App\Controllers\NotFoundContrller;

class FrontControl{

    public $controller  = 'index';
    public $action      = 'home';
    public $param       =   [];
    public $_template;
    public function __construct(Template $template)
    {
        $this->_parseurl();
        $this->_template = $template;
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
        $actionName = $this->action;
        $controllers = new $controllerClassName();
        // if(!class_exists($controllerClassName)):
        //     $controllers->setController('notfoundController');
        // endif;
        
        // if(!method_exists($controllers,$actionName)):
        //     $this->action = $actionName='notfund';
        // endif;

        $controllers->setController($this->controller);
        $controllers->setAction($this->action);
        $controllers->setParam($this->param);
        $controllers->setTemplate($this->_template);

        $controllers->$actionName();

    }







}