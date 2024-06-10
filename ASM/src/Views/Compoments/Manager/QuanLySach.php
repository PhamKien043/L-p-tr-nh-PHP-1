<?php

namespace App\Views\Compoments\Manager;

use App\Views\BaseView;
use mysqli;

class QuanLySach extends BaseView
{
    public static function render()
    {
        ?>

        <body>
            <header>
                <h1>Quản lý Sách</h1>
            </header>

            <div class="add-book">
                <a href="?act=themsach">Thêm Sách</a>
            </div>

            <main>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Tựa đề</th>
					<th>Tác giả</th>
					<th>Năm xuất bản</th>
					<th>Thể loại</th>
					<th>Số lượng</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td>Đắc Nhân Tâm</td>
					<td>Dale Carnegie</td>
					<td>1936</td>
					<td>Tự lực</td>
					<td>10</td>
					<td class="actions">
						<a href="#" class="edit">Sửa</a>
						<a href="#" class="delete">Xóa</a>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>Cái Bóng Của Gió</td>
					<td>Nguyễn Nhật Ánh</td>
					<td>2005</td>
					<td>Tiểu thuyết</td>
					<td>5</td>
					<td class="actions">
						<a href="#" class="edit">Sửa</a>
						<a href="#" class="delete">Xóa</a>
					</td>
				</tr>
                </table>
            </main>
        </body>

        <?php
    }
}