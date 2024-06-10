<?php

namespace App\Views\Compoments\Manager;

use App\Views\BaseView;

class QuanLyBanDoc extends BaseView
{
    public static function render()
    {
        ?>
        
        <body>
            <header>
                <h1>Quản lý Bạn Đọc</h1>
            </header>

            <div class="add-book">
                <a href="?act=bandoc">Thêm Bạn Đọc</a>
            </div>

            <main>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên độc giả</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Số lượng sách mượn</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>Nguyễn Văn A</td>
                            <td>nguyenvana@example.com</td>
                            <td>0123456789</td>
                            <td>123 Đường ABC, TP. HCM</td>
                            <td>2</td>
                            <td class="actions">
                                <a href="#" class="edit">Sửa</a>
                                <a href="#" class="delete">Xóa</a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Trần Thị B</td>
                            <td>tranthib@example.com</td>
                            <td>0987654321</td>
                            <td>456 Đường XYZ, Hà Nội</td>
                            <td>1</td>
                            <td class="actions">
                                <a href="#" class="edit">Sửa</a>
                                <a href="#" class="delete">Xóa</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </main>
        </body>
        <?php
    }
}