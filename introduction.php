<?php
include("controllers/c_nguoi_dung.php");
include("controllers/c_introduction.php");
$c_nguoi_dung=new C_nguoi_dung();
$c_introduction=new C_Introduction();
$c_nguoi_dung->Dang_Nhap();
$c_introduction->HienThi_Introduction();
?>