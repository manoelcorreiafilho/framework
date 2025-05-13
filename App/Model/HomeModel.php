<?php
namespace App\Model;
use App\DAO\UserDAO;
use App\DAO\LinkDAO;
class HomeModel
{
    public $user_data, $user_link;
    public function __construct($user_name){
        $user_dao = new UserDAO();
        $link_dao = new LinkDAO();
        $this -> user_data =  $user_dao -> select(["id", "url_img", "account_name", "user_desc"], ["user_name = '$user_name'"]);
        if(count($this -> user_data) === 0){
            header("Location: /nao existe");
            exit();
        }
        $this -> user_link =  $link_dao -> select(["link_title", "link_url"], ["user_id = '" .  $this -> user_data[0]["id"] . "'"]);

    }
    public function get_user_data(){
        return $this -> user_data;
    }
    public function get_user_link(){
        return $this -> user_link;
    }
}
