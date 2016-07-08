<?php
include("includes/smarty_adam_mma_admincp.php");

$smarty=new Smarty_ADAM_MMA_admincp();
$smarty->assign("view","views/v_index.tpl");
$smarty->assign("page_title","Bảng điều khiển quản trị ứng dụng ADAM MMA");
$smarty->display("layout.tpl");
?>
