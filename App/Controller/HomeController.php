<?php
namespace App\Controller;
use App\Model\HomeModel;
class HomeController
{
    public static function index($username)
    {
        $model = new HomeModel($username);
        include("App/View/Pages/index.html");
    }
    
}