<?php

namespace App\Views\Admin;

use App\Views\BaseView;

class QuenMatKhau extends BaseView
{
    public static function render()
    {
        ?>

<body>
  <div class="container">
    <h1>Quên mật khẩu</h1>
    <form>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="phone">Số điện thoại:</label>
        <input type="tel" id="phone" name="phone" required>
      </div>
      <div class="form-group">
        <button type="submit">Gửi</button>
      </div>
    </form>
  </div>
</body>

<?php
    }
}