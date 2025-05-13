<?php
namespace App\Controller;

use App\Model\AdminModel;

class AdminController
{
    public function index(){
        $model = new AdminModel;
    }
}