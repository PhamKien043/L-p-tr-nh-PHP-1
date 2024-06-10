<?php

namespace App\Views\Compoments;

use App\Views\BaseView;

class Footer extends BaseView
{
    public static function render()
    {
        ?>
            <footer class="card" style="background-color: #333; color: #fff;">
                <div class="card-footer text-center">PC09424 Pham Trung Kien</div>
            </footer>
        <?php
    }
}
