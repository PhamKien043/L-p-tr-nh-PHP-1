<?php

use App\Views\Compoments\Header;
use App\Views\Compoments\Footer;

use App\Views\Admin\DangNhap;
use App\Views\Admin\DangKy;
use App\Views\Admin\QuenMatKhau;

use App\Views\Compoments\Manager\DashBoard;
use App\Views\Compoments\Manager\QuanLySach;
use App\Views\Compoments\Manager\QuanLyTheLoai;
use App\Views\Compoments\Manager\QuanLyBanDoc;

use App\Views\Compoments\Form\ThemSach;
use App\Views\Compoments\Form\TheLoai;
use App\Views\Compoments\Form\BanDoc;

use App\Views\Compoments\NotFound;



// ??: là toáp toán tử cho phép mình kiểm tra giá trị ở phía trước
// nếu giá trị ở phía trước hợp lẹ thì lấy giá trị phía trước
// nếu giá trị ở phía trước không hợp lệ thì lấy giá trị phía sau

$action = $_GET['act'] ?? ''; //QUAN TRỌNG

Header::render();

switch ($action){//load ra trang chủ
    case "":
            DashBoard::render();
            break;

    case "account":
        DangNhap::render();
        break;

    case "dangKy":
        DangKy::render();
        break;

    case "quenmatkhau":
        QuenMatKhau::render();
        break;

    
    case "dashboard":
        DashBoard::render();
        break;

    case "quanlysach":
        QuanLySach::render();
        break;

    case "quanlytheloai":
        QuanLyTheLoai::render();
        break;

    case "quanlybandoc":
        QuanLyBanDoc::render();    
        break;

    //---------
    case "themsach":
        ThemSach::render();
        break;

    case "themSach":
        ThemSach::handle();
        break;
    ////

    //---------
    case "theloai":
        TheLoai::render();
        break;

    case "themtheloai":
        TheLoai::handle();
        break;

    ////


    //-----------
    case "bandoc":
        BanDoc::render();
        break;

    case "thembandoc":
        BanDoc::handle();
        break;
    ////
    
     default :
        NotFound::render();
        //load ra 404 not found
        break;   
}

Footer::render();