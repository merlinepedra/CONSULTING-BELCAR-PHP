<?php

namespace App\Core;
use PDO;
use PDOException;

class SQLConexion {

    public $mysql;
    
	public function __construct()
    {
        $config = new Config();
        $host = "localhost";
        $user = "root";
        $pass = "root";
        $database = "users";
        $charset = "utf-8";
        $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
        $this->mysql = new PDO("mysql:host={$host}; dbname={$database}; charset{$charset}",$user, $pass, $options);
    
    }
}
