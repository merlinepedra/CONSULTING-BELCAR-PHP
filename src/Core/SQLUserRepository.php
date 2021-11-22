<?php
namespace App\Core;

class SQLUserRepository implements IUserRepository {

    private $table="users";
     function getAll(){
        $db = (new SQLConexion())->mysql;
        $query = $db->query("select * FROM {$this->table}");
        $result=$query->fetchAll();
        return $result;
    }
}