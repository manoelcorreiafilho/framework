<?php
namespace App\Controller;

use App\Model\LoginModel;

class LoginController
{
    public static function index()
    {
        include("App/View/Forms/login.html");
    }
    public static function login()
    {
        session_start();
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['pass'] = $_POST['pass'];
        header("Location: /admin");
    }
    public static function registering()
    {
        include("App/View/Forms/register.html");
    }
    public static function register()
    {
        if(
            isset($_FILES["user_img"]) &&
            isset($_POST["user_desc"]) &&
            isset($_POST["account_name"]) &&
            isset($_POST["user_name"]) &&
            isset($_POST["user_pass"])
        ){
            $model = new LoginModel();
            $model -> register();
        }else{
            echo "error";
        }
    }
}