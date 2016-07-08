<nav class="navbar navbar-inverse" style="background-color:#780700;">
<div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand adam-brand" href="." style="font-family:myriad-bold;size:16px;">ADAM MMA</a>
        </div>
        <ul class="nav navbar-nav adam-menu">
            <li><a href="introduction.php">Giới thiệu</a></li>
            <li {if isset($act_menu) && $act_menu == 'LopHoc'}class="active"{/if}><a href="?act_menu=LopHoc">Lớp học</a></li>
            <li {if isset($act_menu) && $act_menu == 'GiangVien'}class="active"{/if}><a href="?act_menu=GiangVien">Giảng viên</a></li>
            <li><a href="hocvien.php">Học viên</a></li>
            <li><a href="#">Thu - Chi</a></li>
            <li><a href="#">Thiết bị</a></li>
            <li><a href="#">Dự án</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li class="adam-loichao-dangnhap">{$loi_chao_dang_nhap}</li>
        <li><a href="dangxuat.php?user={$md5_ten_dang_nhap}" class="btn-link">Đăng xuất&nbsp;<span class="glyphicon glyphicon-log-out"></span></a></li>
        </ul>
        
    <!-- {block name="login_form_modal"}{include file="home/login_form_modal.tpl"}{/block}-->
</div>
</nav>