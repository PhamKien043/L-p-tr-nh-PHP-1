<?php

namespace App\Views\Compoments\Add;

use App\Model\Add\AddTheLoai;

use App\Views\BaseView;

class AddThemTheLoai extends BaseView{

    public static function render()

    //Xử lý dữ liệu ở đây

    {
        ?>
        <div class="container">
            
        </div>
        <?php
    }

    public static function handle(){
        $data = $_POST;
        $addTheLoai = new AddTheLoai();
        $result = $addTheLoai->create($data);
        //in cái thông báo

        if($result){
            header("Location: ?act=dashboard");
        }
    }
 
}