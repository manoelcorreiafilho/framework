<?php
namespace App\DAO;
class ExampleDAO extends DAO
{
    public function insert($vals = [])
    {
        if(count($vals) != 0){
            $vals = implode(",", $vals);
            $sql = "INSERT INTO name_table(id, username)";
            $sql .= "VALUES (null, $vals)";
            return $this-> conn -> query($sql);
        }
    }
    public function select($fields = [], $cond = [])
    {
        if(count($fields) != 0){
            $fields = implode(",", $fields);
            $sql = "SELECT $fields FROM name_table ";
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
            $sql = "UPDATE name_table SET $changes";
            $sql .= "WHERE $cond";
            return $this-> conn -> query($sql);
        }
    }
    public function delete($cond = [])
    {
        if(count($cond) != 0){
            $cond = implode(" and ", $cond);
            $sql = "DELETE FROM name_table ";
            $sql .= "WHERE $cond";
            return $this-> conn -> query($sql);
        }
    }
}