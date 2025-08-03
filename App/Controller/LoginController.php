<?php
namespace App\Controller;

use App\Model\LoginModel;

class LoginController
{
    public static function index()
    {
        include("./App/View/Forms/login.html");
    }
    public static function login()
    {
        $model = new LoginModel();
        $model -> login();
    }
    
}