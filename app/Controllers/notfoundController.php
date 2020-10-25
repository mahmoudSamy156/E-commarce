<?php
namespace App\Controllers;

use App\Controllers\BaseController\BaseController;

class NotFoundController extends BaseController{

    public function home()
    {
        $this->__view('notfound','notfund');
    }
}
