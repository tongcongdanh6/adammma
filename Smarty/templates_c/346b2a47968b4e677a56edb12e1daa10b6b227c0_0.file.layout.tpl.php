<?php
/* Smarty version 3.1.29, created on 2016-07-07 20:43:43
  from "D:\xampp\htdocs\WEBROOT\ADAM_Management_Project\admincp\Smarty\templates\layout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577ea2df9298d8_81322957',
  'file_dependency' => 
  array (
    '346b2a47968b4e677a56edb12e1daa10b6b227c0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\WEBROOT\\ADAM_Management_Project\\admincp\\Smarty\\templates\\layout.tpl',
      1 => 1467917020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:main_sidebar.tpl' => 1,
    'file:content.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:side_bar.tpl' => 1,
  ),
),false)) {
function content_577ea2df9298d8_81322957 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "head", array (
  0 => 'block_27271577ea2df906640_44412562',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "header", array (
  0 => 'block_11700577ea2df9121c9_58579884',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "main_sidebar", array (
  0 => 'block_32221577ea2df916040_04692227',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "footer", array (
  0 => 'block_7506577ea2df91dd42_74075455',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "side_bar", array (
  0 => 'block_10275577ea2df921bd1_86499164',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php }
/* {block 'head'}  file:layout.tpl */
function block_27271577ea2df906640_44412562($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'head'} */
/* {block 'header'}  file:layout.tpl */
function block_11700577ea2df9121c9_58579884($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'header'} */
/* {block 'main_sidebar'}  file:layout.tpl */
function block_32221577ea2df916040_04692227($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'main_sidebar'} */
/* {block 'footer'}  file:layout.tpl */
function block_7506577ea2df91dd42_74075455($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'footer'} */
/* {block 'side_bar'}  file:layout.tpl */
function block_10275577ea2df921bd1_86499164($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:side_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'side_bar'} */
}
