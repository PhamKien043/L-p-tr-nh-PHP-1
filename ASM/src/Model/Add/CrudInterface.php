<?php

//Interface là bản thiết kế dành cho phương thức 
//abstract class là bản thiết kế dành cho lớp

namespace App\Model\Add;

interface CrudInterface{
    public function getAll();

    public function getOne(int $id);

    public function update(int $id, array $data);

    public function create(array $data);

    public function delete(int $id) : bool;

    /*
    *Hàm này để xóa
    *@param int $id
    *
    *@return bool
    */

}