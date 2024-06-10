<?php

namespace App\Views\Compoments\Manager;

use App\Views\BaseView;

class QuanLyTheLoai extends BaseView
{
	public static function render()
	{
		?>
		<body>
			<header>
				<h1>Quản lý Thể Loại</h1>
			</header>

			<div class="add-book">
				<a href="?act=theloai">Thêm Thể Loại</a>
			</div>

			<main>
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Tên Thể Loại</th>
							<th>Mô Tả</th>
							<th>Số Lượng Sách</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td></td>
							<td>Tự Lực</td>
							<td>Sách về kỹ năng sống và phát triển bản thân</td>
							<td>20</td>
							<td class="actions">
								<a href="#" class="edit">Sửa</a>
								<a href="#" class="delete">Xóa</a>
							</td>
						</tr>
						<tr>
							<td></td>
							<td>Tiểu Thuyết</td>
							<td>Sách về các câu chuyện hư cấu</td>
							<td>30</td>
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