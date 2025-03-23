<?php
namespace App\Controller;

use App\Model\InitModel;

class InitController
{
    public static function index()
    {
        include("App/View/Pages/init.php");
    }
    public static function exemp()
    {
        include("App/View/Pages/exemp.php");
    }
}