<?php 

namespace App\Process;

class Template{

    private $_template;
    public function __construct(array $template)
    {
        $this->_template = $template;
    }
    public static function asset($url){

       $know =  explode('/',$url);
       $knoww = explode('.',end($know));
       switch(end($knoww) ):
        case('css'):
            echo PATH_CSS.str_replace('/',DS,$url);
            break;
        case('js'):
            echo PATH_JS.str_replace('/',DS,$url);
        break;
        case('jpg' || 'png'):
            echo PATH_IMG.str_replace('/',DS,$url);
        break;
       endswitch;
      
    }       

    public function renderAppStart(){
        foreach($this->_template['TEMPLATE'] as $templatepages):            
            require_once $templatepages;
        endforeach;
    }

    public function renderAppEnd(){
        foreach($this->_template['FOOtER'] as $footer):
        require_once $footer;
        endforeach;
    }

}
