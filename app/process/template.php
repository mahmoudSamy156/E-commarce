<?php 

namespace App\Process;

class Template{

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
        case('jpg'):
            echo PATH_IMG.str_replace('/',DS,$url);
        break;
       endswitch;
      
    }       

}
