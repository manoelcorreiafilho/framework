<?php
namespace App\Controller;

use App\Model\InitModel;

class InitController
{
    public static function index()
    {
        include("App/View/Forms/login.html");
    }
    public static function register()
    {
        include("App/View/Forms/register.html");
    }
}