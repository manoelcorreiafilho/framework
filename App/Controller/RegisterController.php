<?php
namespace App\Controller;

use App\Model\RegisterModel;

class RegisterController
{
    public static function index()
    {
        include("./App/View/Forms/register.html");
    }
    public static function register()
    {
        $model = new RegisterModel();
        $model -> register();
    }
    
}