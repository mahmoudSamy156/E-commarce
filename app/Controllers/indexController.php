<?php
namespace App\Controllers;

use App\Controllers\BaseController\BaseController;
use App\models\BaseQuery\BaseQueryDataBase;
use App\Models\UserModel;

class IndexController extends BaseController{
    public function __construct()
    {
       
    }
    public function home(){
      
        $this->__view('index','home');
        
        
    }
    public function about(){
        $this->data = UserModel::getAll();
    }
    
}
