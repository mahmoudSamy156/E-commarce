<?php 

namespace App\Controllers\Auth;

use App\Controllers\BaseController\BaseController;
use App\Models\UserModel;
use App\Process\Traits\FilterInput;
use App\Process\Traits\Redirect;
use App\Process\Traits\Validate;

class LoginController extends BaseController{
    use Redirect;
    use FilterInput;
    use Validate;

    private $inputvalidate = [
        'email'     =>'req|email',
        'password'  =>'req',
    ];

    public function __construct()
    {
        if(isset($_SESSION['user'])):
            $this->redirect('/ecommarce/public/index/home');            
       endif;
    }
    public function home(){
        $this->__view('auth','login');
    }

    public function authlogin()
    {
        
        if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['Login'])):
            $email    =     $this->filterString($_POST['email']);
            $password =     $this->Filternum($_POST['password']);
        
            if(UserModel::Login($email , $password)):
                $date = UserModel::Login($email , $password);
                $_SESSION['user']= $date;
                return $this->redirect('/ecommarce/public/index/home');
            else:
                return $this->redirect('/ecommarce/public/login/home');
            endif;
        endif;
    }

   

}