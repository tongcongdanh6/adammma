<?php
// Copyright (C) 2016 by Tong Cong Danh
include("controllers/c_home_page_ver2.php");
include("controllers/c_nguoi_dung.php");
$c_home_page = new C_home_page();
$c_nguoi_dung = new C_nguoi_dung();
$c_nguoi_dung->Dang_Nhap();
$c_home_page->HienThiTrangChu();
?>