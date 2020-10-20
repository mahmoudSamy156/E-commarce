<?php
namespace App\Controllers\BaseController;

class BaseController{

    private $controller;
    private $action;
    private $param;
    private $template;

    protected $data =[];

   public function setController($controllerName){

        $this->controller=$controllerName;

    }
   public function setAction($actionName){

        $this->action=$actionName;
        
    }

    public function setParam($paramName){

        $this->param = $paramName;

    }

    public function setTemplate($templateName)
    {
        $this->template = $templateName;
    }


    public function  __view($folder,$file){
     
    

        extract($this->data);

        $view =  PATH_VIEWS.$folder.DS.$file.'.view.php';
        if(file_exists($view)):
            return require $view;
        endif;
    }

}
