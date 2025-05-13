<?php
namespace App\Model;

use App\DAO\UserDAO;

class LoginModel
{
    public function register(){
        $dao = new UserDAO();
        $img = $_FILES["user_img"];
        $account_name = $_POST["account_name"];
        $user_name = $_POST["user_name"];
        $user_pass = $_POST["user_pass"];
        $user_desc = $_POST["user_desc"];
        $url_img = $user_name .  date("-YmdHis.") .  explode(".", $img["name"])[1];
        move_uploaded_file($img["tmp_name"], "Uploads/" . $url_img);
        $user_data = [
            "'$url_img'",
            "'$account_name'",
            "'$user_name'",
            "'$user_pass'",
            "'$user_desc'"
        ];
        $dao -> insert($user_data);
    }
}