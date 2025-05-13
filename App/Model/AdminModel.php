<?php
namespace App\Model;

use App\DAO\UserDAO;

class AdminModel
{
    public function __construct(){
        session_start();
        $user_name = $_SESSION['user'];
        $user_pass = $_SESSION['pass'];
        $dao = new UserDAO();
        $user = $dao -> select(["*"], ["user_name = '$user_name'", "user_pass = '$user_pass'"]);
        if(count($user) === 0){
            header("Location: /?menssage=error");
            exit();
        }
    }
}