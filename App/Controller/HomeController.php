<?php
namespace App\Controller;
class HomeController
{
    public static function index()
    {
        include("App/View/Pages/home.html");
    }
    
}