<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-11 11:29:50
  from '/www/wwwroot/hi.mars333.com/resources/views/material/table/js_1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f09322e0cf556_24294771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93c1d6fd80341400115dd74c7934c1cfd1146a60' => 
    array (
      0 => '/www/wwwroot/hi.mars333.com/resources/views/material/table/js_1.tpl',
      1 => 1581932049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f09322e0cf556_24294771 (Smarty_Internal_Template $_smarty_tpl) {
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
