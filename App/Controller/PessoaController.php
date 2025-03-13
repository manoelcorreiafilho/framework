<?php
namespace App\Controller;

use App\Model\ExampleModel;

class PessoaController
{
    public static function index()
    {
        include("App/View/Pages/home.php");
    }
    public static function users()
    {
        $model = new ExampleModel();
        include("App/View/Pages/users.php");
    }
}