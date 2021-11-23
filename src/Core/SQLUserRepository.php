<?php
namespace App\Core;

class SQLUserRepository implements IUserRepository {

    private $table="users";
    private $conexion;

    function __construct()
    {
        $this->conexion = (new SQLConexion())->mysql;
    }

     function getAll(){
       
        $query = $this->conexion->query("select * FROM {$this->table}");
        $result=$query->fetchAll();
        return $result;
    }

    function save() {
        echo 'save in db';
    }
}