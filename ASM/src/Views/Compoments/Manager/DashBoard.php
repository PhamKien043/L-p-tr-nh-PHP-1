<?php

namespace App\Views\Compoments\Manager;

use App\Views\BaseView;
use mysqli;

class DashBoard extends BaseView
{
    public static function render()
    {
        $sever = "localhost";
        $db_username = "root";
        $db_password = "mysql";
        $database = "asm_wd19303";

        $connection = new mysqli(
            $sever,
            $db_username,
            $db_password,
            $database
        );

        $query = "SELECT * FROM `dashboard_books`";

        $result = $connection->query($query);

        //đếm số dòng
       // echo $result->num_rows;
        
        ?>

        <body>
            <section class="dashboard">
                <div class="dashboard-item">
                    <h3>Tổng số sách</h3>
                    <p><?php echo $result->num_rows; ?></p>
                </div>
                <div class="dashboard-item">
                    <h3>Số sách mới</h3>
                    <p><?php echo $result->num_rows; ?></p>
                </div>
                <div class="dashboard-item">
                    <h3>Số lượt mượn</h3>
                    <p><?php echo $result->num_rows; ?></p>
                </div>
                <div class="dashboard-item">
                    <h3>Số bạn đọc</h3>
                    <p><?php echo $result->num_rows; ?></p>
                </div>
            </section>
        </body>

        </html>
        <?php
    }
}
