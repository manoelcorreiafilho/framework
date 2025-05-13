<?php
namespace App\DAO;

use PDO;

class DAO 
{
    protected $conn;
    public function __construct()
    {
        $db_name = "onlink";
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $this -> conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    }
    
}