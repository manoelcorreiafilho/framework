<?php
namespace App\Model;
use App\DAO\ExampleDAO;
class ExampleModel
{
    public function getUsers()
    {
        $dao = new ExampleDAO();
        return $dao -> select(["*"]);
    }
}