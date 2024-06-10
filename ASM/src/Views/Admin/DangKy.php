<?php

namespace App\Views\Admin;

use App\Views\BaseView;

class DangKy extends BaseView
{
    public static function render()
    {
        ?>

        <div class="container">
        <h1>Đăng ký</h1>
        <form>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" placeholder="Nhập email của bạn" required>
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại:</label>
                <input type="text" id="phone" name="phone" placeholder="Nhập số điện thoại của bạn" required>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" placeholder="Nhập mật khẩu của bạn" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Xác nhận mật khẩu:</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Nhập lại mật khẩu" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Đăng ký">
            </div>
        </form>
        <div class="logout-link">
            <a href="?act=dangnhap">Quay lại trang đăng nhập</a>
        </div>
        </div>
    <?php
    }
}
