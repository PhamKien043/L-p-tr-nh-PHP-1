<?php

namespace App\Views\Compoments\Form;

use App\Model\Add\AddTheLoai;
use App\Views\BaseView;

class TheLoai extends BaseView
{
  public static function render()
  {
    ?>
    
    <body>
      <div class="container">
        <header>
          <h1>Thêm Thể Loại</h1>
        </header>

        <form class="genre-form" action="?act=themtheloai" method="POST">
          <div class="form-group">
            <label for="name">Tên Thể Loại:</label>
            <input type="text" id="name" name="name" required>
          </div>

          <div class="form-group">
            <label for="description">Mô Tả:</label>
            <textarea id="description" name="description" required></textarea>
          </div>

          <div class="form-group">
            <label for="quantity">Số Lượng Sách:</label>
            <input type="number" id="quantity" name="quantity" min="0" required>
          </div>

          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Lưu</button>
            <a href="?act=quanlytheloai" class="btn btn-danger">Hủy</a>
          </div>
        </form>
      </div>
    </body>
    <?php
  }

  public static function handle(){
    $data = $_POST;
    $addTheLoai = new AddTheLoai();
    $result = $addTheLoai->create($data);

    if ($result){
      header("Location: ?act=quantheloai");
    }
  }
}