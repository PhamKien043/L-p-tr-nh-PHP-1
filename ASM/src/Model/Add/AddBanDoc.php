<?php

namespace App\Model\Add;

use App\Model\Database;

class AddBanDoc extends Database implements CrudInterface{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $query = "SELECT * FROM 'form_bandoc'";

        $result = $this->query($query);

        return $result;
    }

    public function getOne(int $id)
    {
        
    }

    public function create(array $data)
    {
        $name = $data['name'] ?? '';
        $email  = $data['email'] ?? ''; 
        $phone  = $data['phone'] ?? '';
        $address  = $data['address'] ?? '';
        $books_borrowed  = $data['books_borrowed'] ?? '';

        $query = "INSERT INTO `form_bandoc` (`name`,`email`,`phone`,`address`,`books_borrowed`) 
        VALUES ('$name','$email','$phone','$address','$books_borrowed')";
        $result = $this->query($query);
        
        return $result;

    }

    public function update(int $id, array $data)
    {
        
    }

    public function delete (int $id) : bool
    {
        //còn xử lý 1 cái gì đó
        $isDelete = false;
    }
}