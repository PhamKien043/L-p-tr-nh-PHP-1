<?php

namespace App\Model\Add;

use App\Model\Database;

class AddSach extends Database implements CrudInterface{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $query = "SELECT * FROM 'form_sach'";

        $result = $this->query($query);

        return $result;
    }

    public function getOne(int $id)
    {
        
    }

    public function create(array $data)
    {
        $title = $data['name'] ?? '';
        $author = $data['author'] ?? '';
        $publication_year = $data['publication_year'] ?? '';
        $genre = $data['genre'] ?? '';
        $quantity = $data['quantity'] ?? '';

        $query = "INSERT INTO `form_sach` (`title`,`author`,`publication_year`,`genre`,`quantity`) 
        VALUES ('$title','$author','$publication_year','$genre','$quantity')";
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