<?php

namespace App\Views\Admin;

use App\Views\BaseView;

class DangNhap extends BaseView
{
    public static function render()
    {
        ?>

        <body>
            <?php
            if (isset($_SESSION['username'])) {
                echo '<div class="container">';
                echo '<h1>Xin chào, ' . $_SESSION['username'] . '!</h1>';
                echo '<div class="logout-link"><a href="account.php">Đăng xuất</a></div>';
                echo '</div>';
            } else {
                ?>
                <div class="container">
                    <h1>Đăng nhập</h1>
                    <form method="POST" action="?act=account.php">
                        <div class="form-group">
                            <label for="username">Tên người dùng:</label>
                            <input type="text" id="username" name="username" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Mật khẩu:</label>
                            <input type="password" id="password" name="password" required>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Đăng nhập">
                        </div>

                        <div class="form-group forgot-password">
                            <a href="?act=dangKy">Đăng ký</a>
                        </div>
                        <div class="form-group forgot-password">
                            <a href="?act=quenmatkhau">Quên mật khẩu?</a>
                        </div>

                        
                        
                    </form>
                </div>
                <?php
            }
            ?>
        </body>
    <?php
    }
}