<?php

namespace App\Model;

use App\Model\Add\CrudInterface;

class Product implements CrudInterface{
    public function getAll(){
    }

    public function getOne(int $id){
    }

    public function update(int $id, array $data){
    }

    public function create(array $data){
    }

    public function delete(int $id) : bool{
        $isDelete = false;

        if($isDelete){
            return true;
        }

        return false;
        
    }


}

$product = new Product();
$product ->getOne(1);

