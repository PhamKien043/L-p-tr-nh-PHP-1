<?php

namespace App\Model\Add;

use App\Model\Database;

class AddTheLoai extends Database implements CrudInterface{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $query = "SELECT * FROM 'form_theloai'";

        $result = $this->query($query);

        return $result;
    }

    public function getOne(int $id)
    {
        
    }

    public function create(array $data)
    {
        $name = $data['name'] ?? '';
        $description = $data['description'] ?? '';
        $quantity = $data['quantity'] ?? '';

        $query = "INSERT INTO `form_theloai` (`name`,`description`,`quantity`) 
        VALUES ('$name','$description','$quantity')";
        $result = $this->query($query);

        return $result;
    }

    public function update(int $id, array $data)
    {
        
    }

    public function delete(int $id): bool
    {
        //còn xử lý 1 cái gì đó
        $isDelete = false;
    }
}