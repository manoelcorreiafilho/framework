<?php
namespace App\DAO;
class UserDAO extends DAO
{
    public function insert($vals = [])
    {
        if(count($vals) != 0){
            $vals = implode(",", $vals);
            $sql = "INSERT INTO users(id, url_img, account_name, user_name, user_pass, user_desc, active)";
            $sql .= "VALUES (null, $vals, 1)";
            $this-> conn -> query($sql);
        }
    }
    public function select($fields = [], $cond = [])
    {
        if(count($fields) != 0){
            $fields = implode(",", $fields);
            $sql = "SELECT $fields FROM users ";
            if(count($cond) != 0){
                $cond = implode(" and ", $cond);
                $sql .= "WHERE $cond";
            }
            return $this-> conn -> query($sql) -> fetchAll();
        }
    }
    public function update($changes = [], $cond = [])
    {
        if(count($changes) != 0 && count($cond) != 0){
            $changes = implode(",", $changes);
            $cond = implode(" and ", $cond);
            $sql = "UPDATE users SET $changes";
            $sql .= "WHERE $cond";
            return $this-> conn -> query($sql) -> fetchAll();
        }
    }
    public function delete($cond = [])
    {
        if(count($cond) != 0){
            $cond = implode(" and ", $cond);
            $sql = "DELETE FROM users ";
            $sql .= "WHERE $cond";
            return $this-> conn -> query($sql) -> fetchAll();
        }
    }
}