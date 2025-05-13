<?php
namespace App\DAO;
class linkDAO extends DAO
{
    public function insert($vals = [])
    {
        if(count($vals) != 0){
            $vals = implode(",", $vals);
            $sql = "INSERT INTO links(id, linkname)";
            $sql .= "VALUES (null, $vals)";
            $this-> conn -> query($sql);
        }
    }
    public function select($fields = [], $cond = [])
    {
        if(count($fields) != 0){
            $fields = implode(",", $fields);
            $sql = "SELECT $fields FROM links ";
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
            $sql = "UPDATE links SET $changes";
            $sql .= "WHERE $cond";
            return $this-> conn -> query($sql) -> fetchAll();
        }
    }
    public function delete($cond = [])
    {
        if(count($cond) != 0){
            $cond = implode(" and ", $cond);
            $sql = "DELETE FROM links ";
            $sql .= "WHERE $cond";
            return $this-> conn -> query($sql) -> fetchAll();
        }
    }
}