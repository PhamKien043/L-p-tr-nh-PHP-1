<?php

namespace App\Views\Compoments\Form;

use App\Model\Add\AddSach;

use App\Views\BaseView;

class ThemSach extends BaseView
{
  public static function render()
  {
    ?>

    <body>
      <div class="container">
        <header>
          <h1>Thêm Sách</h1>
        </header>

        <form class="book-form" action="?act=themSach" method="POST">
          <div class="form-group">
            <label for="title">Tựa đề:</label>
            <input type="text" id="title" name="title" required>
          </div>

          <div class="form-group">
            <label for="author">Tác giả:</label>
            <input type="text" id="author" name="author" required>
          </div>

          <div class="form-group">
            <label for="publication_year">Năm xuất bản:</label>
            <input type="text" id="publication_year" name="publication_year" required>
          </div>

          <div class="form-group">
            <label for="genre">Thể loại:</label>
            <select id="genre" name="genre" required>
              <option value="" >Chọn thể loại</option>
              <option value="fiction">Tiểu thuyết</option>
              <option value="non-fiction">Phi hư cấu</option>
              <option value="poetry">Thơ</option>
              <option value="drama">Kịch</option>
            </select>
          </div>

          <div class="form-group">
            <label for="quantity">Số lượng:</label>
            <input type="number" id="quantity" name="quantity" min="1" required>
          </div>

          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Lưu</button>
            <a href="?act=quanlysach" class="btn btn-danger">Hủy</a>
          </div>
        </form>
      </div>
    </body>
    <?php
  }

  public static function handle(){
    $data = $_POST;
    $addSach = new AddSach();
    $result = $addSach->create($data);

    if ($result){
      header("Location: ?act=quanlysach");
    }
  }
}