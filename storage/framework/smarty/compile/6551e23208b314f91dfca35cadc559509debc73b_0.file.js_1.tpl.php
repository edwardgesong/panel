<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-17 19:09:03
  from '/www/wwwroot/www.piyrw.com/resources/views/material/table/js_1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4a744f3d8706_32948169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6551e23208b314f91dfca35cadc559509debc73b' => 
    array (
      0 => '/www/wwwroot/www.piyrw.com/resources/views/material/table/js_1.tpl',
      1 => 1581932049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4a744f3d8706_32948169 (Smarty_Internal_Template $_smarty_tpl) {
?>function modify_table_visible(id, key) {
if(document.getElementById(id).checked)
{
table_1.columns( '.' + key ).visible( true );
localStorage.setItem(window.location.href + '-haschecked-' + id, true);
}
else
{
table_1.columns( '.' + key ).visible( false );
localStorage.setItem(window.location.href + '-haschecked-' + id, false);
}
}
<?php }
}
