<?php

namespace App\Model;

use mysqli;

class Database{

    private $connection;

    public function __construct(){
        {
            $sever = "localhost";
            $db_username = "root";
            $db_password = "mysql";
            $database = "asm_wd19303";

            $this->connection = new mysqli(
            $sever,
            $db_username,
            $db_password,
            $database
        );
    }
}
    
    public function query(string $query){
        return $this->connection->query($query);
    }

    public function prepare(string $query){
        return $this->connection->prepare($query);
    }
}