<?php

namespace App\Views\Compoments;

use App\Views\BaseView;

class Header extends BaseView
{
    public static function render()
    {
        ?>

        <body>
            <header>
                <div class="logo">
                    Thư viện
                </div>
                <nav>
                    <ul>
                        <li><a href="?act=dashboard">Dashboard</a></li>
                        <li><a href="?act=quanlysach">Quản lý sách</a></li>
                        <li><a href="?act=quanlytheloai">Quản lý thể loại</a></li>
                        <li><a href="?act=quanlybandoc">Quản lý bạn đọc</a></li>
                    </ul>
                </nav>
                <div class="search-container">
                    <input type="text" placeholder="Tìm kiếm">
                    <button>Tìm</button>
                </div>
                <li class="login-container">
                    <?php if(!empty($SESSION['user'])): ?>
                        <a class="login-container" href="?act=account">
                            Hi, <?= $_SESSION['user']['name']?>
                        </a>
                </li>
                <?php else: ?>
                <div class="login-container">
                    <a href="?act=account">Đăng nhập</a>
                </div>
                <?php endif; ?>
            </header>

            
        </body>

        <?php
    }
}
