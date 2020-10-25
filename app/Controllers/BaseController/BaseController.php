<?php
namespace App\Controllers\BaseController;

class BaseController{

    private $controller;
    private $action;
    protected $param;
    private $template;
    protected $Auth;

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

    public function setauthh($auth){
        $this->Auth = $auth;
    }




    public function  __view($folder,$file){
        $view =  PATH_VIEWS.$folder.DS.$file.'.view.php';
        if(file_exists($view)):
            $this->template->renderAppStart();
            extract($this->data);
             require $view;
            $this->template->renderAppEnd();
        endif;
    }

   

}
