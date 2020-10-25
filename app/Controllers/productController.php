<?php


namespace App\Controllers;


use App\Controllers\BaseController\BaseController;
use App\Models\CategoryModel;
use App\Models\ProductModel;


class ProductController extends BaseController
{

    public function home()
    {
        $this->data['products'] = ProductModel::getAll();
        $this->data['categories'] = CategoryModel::getAll();
        $this->__view('product','showProduct');
    }

    public function productDetails()
    {

        
        if(isset($this->param[0])):
            $this->data['products'] = ProductModel::getAllBykey($this->param[0]);
            $this->__view('product','productDetails');
        endif;
        $this->__view('product','productDetails');
    }
    
}