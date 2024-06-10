<?php

namespace App\Views\Compoments\Form;

use App\Model\Add\AddBanDoc;

use App\Views\BaseView;

class BanDoc extends BaseView
{
  public static function render()
  {
    ?>

    <body>
      <div class="container">
        <header>
          <h1>Thêm Bạn Đọc</h1>
        </header>

        <form class="reader-form" action="?act=thembandoc" method="POST">
          <div class="form-group">
            <label for="name">Tên độc giả:</label>
            <input type="text" id="name" name="name" required>
          </div>

          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
          </div>

          <div class="form-group">
            <label for="phone">Số điện thoại:</label>
            <input type="tel" id="phone" name="phone" required>
          </div>

          <div class="form-group">
            <label for="address">Địa chỉ:</label>
            <input type="text" id="address" name="address" required>
          </div>

          <div class="form-group">
            <label for="books_borrowed">Số lượng sách mượn:</label>
            <input type="number" id="books_borrowed" name="books_borrowed" min="1" required>
          </div>

          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Lưu</button>
            <a href="?act=quanlybandoc" class="btn btn-danger">Hủy</a>
          </div>
        </form>
      </div>
    </body>
  <?php
  }

  public static function handle(){
    $data = $_POST;
    $addBanDoc = new AddBanDoc();
    $result = $addBanDoc->create($data);

    if ($result){
      header("Location: ?act=quanlybandoc");
    }
  }
}
