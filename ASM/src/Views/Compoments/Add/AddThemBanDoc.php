<?php

namespace App\Views\Compoments\Add;

use App\Model\Add\AddBanDoc;

use App\Views\BaseView;

class AddThemBanDoc extends BaseView{

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
        $addBanDoc = new AddBanDoc();
        $result = $addBanDoc->create($data);
        //in cái thông báo

        if($result){
            header("Location: ?act=dashboard");
        }
    }
 
}