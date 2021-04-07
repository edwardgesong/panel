<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-27 08:10:13
  from '/www/wwwroot/hi.mars333.com/resources/views/material/email_nrcy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f1e1b65ad57b8_11484988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '434cd926651b9ba2f25902696040b34c2629916f' => 
    array (
      0 => '/www/wwwroot/hi.mars333.com/resources/views/material/email_nrcy.tpl',
      1 => 1581932049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1e1b65ad57b8_11484988 (Smarty_Internal_Template $_smarty_tpl) {
?><ul>
    <img src="/images/email_nrcy.jpg" height="458" width="468">
    <br/>
    <?php if ($_smarty_tpl->tpl_vars['config']->value["enable_admin_contact"] == 'true') {?>
        <p>如果发现“收信查询”中没有找到邮件，请联系管理员：</p>
        <?php if ($_smarty_tpl->tpl_vars['config']->value["admin_contact1"] != null) {?>
            <li><?php echo $_smarty_tpl->tpl_vars['config']->value["admin_contact1"];?>
</li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['config']->value["admin_contact2"] != null) {?>
            <li><?php echo $_smarty_tpl->tpl_vars['config']->value["admin_contact2"];?>
</li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['config']->value["admin_contact3"] != null) {?>
            <li><?php echo $_smarty_tpl->tpl_vars['config']->value["admin_contact3"];?>
</li>
        <?php }?>
    <?php }?>
</ul><?php }
}
