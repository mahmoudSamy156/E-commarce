<?php
namespace App\Controllers;

use App\Controllers\BaseController\BaseController;
use App\Models\ProductModel;
use App\Models\UserModel;


class IndexController extends BaseController{
    public function __construct()
    {
      
    }
    public function home(){
        $this->data['products']     = ProductModel::getAll();
        $this->data['productsNum']  = ProductModel::getBynum(4);
        $this->data['newproducts']  = ProductModel::NewData(4);
       
        $this->__view('index','home');
        
        
    }
    public function about()
    {
        $this->data = UserModel::getAll();
    }
    
}
