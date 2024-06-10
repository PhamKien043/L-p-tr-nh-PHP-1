<?php

namespace App\Views\Compoments\Employee;

use App\Model\Department;
use App\Views\BaseView;

class ListEmployee extends BaseView
{
    public static function render()
    { 
        $department = new Department();
        ?>
        <div class="container">
        <?php while ($record = $department->getAll()->fetch_assoc()):  ?>
            <?= $record['name'] ?>
        <?php endwhile; ?>
        </div>
        <?php }
    }
    