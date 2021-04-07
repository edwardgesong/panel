<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-07 11:34:51
  from '/www/wwwroot/www.piyrw.com/resources/conf/quantumult.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e63165bd1db04_17078399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '448422ee8c31f015b569559015d4574c0c6a3e9b' => 
    array (
      0 => '/www/wwwroot/www.piyrw.com/resources/conf/quantumult.tpl',
      1 => 1581932049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:rule/Apple.conf' => 1,
    'file:rule/PROXY.conf' => 1,
    'file:rule/DIRECT.conf' => 1,
  ),
),false)) {
function content_5e63165bd1db04_17078399 (Smarty_Internal_Template $_smarty_tpl) {
?>[SERVER]
<?php echo $_smarty_tpl->tpl_vars['All_Proxy']->value;?>


[POLICY]
<?php echo $_smarty_tpl->tpl_vars['ProxyGroups']->value['proxy_group'];?>

<?php echo $_smarty_tpl->tpl_vars['ProxyGroups']->value['domestic_group'];?>

<?php echo $_smarty_tpl->tpl_vars['ProxyGroups']->value['others_group'];?>

<?php echo $_smarty_tpl->tpl_vars['ProxyGroups']->value['apple_group'];?>

<?php echo $_smarty_tpl->tpl_vars['ProxyGroups']->value['auto_group'];?>

<?php echo $_smarty_tpl->tpl_vars['ProxyGroups']->value['direct_group'];?>


[Rule]
<?php $_smarty_tpl->_subTemplateRender('file:rule/Apple.conf', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:rule/PROXY.conf', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:rule/DIRECT.conf', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

GEOIP,CN,🍂 Domestic
FINAL,☁️ Others

[DNS]
system, 119.29.29.29, 223.6.6.6, 114.114.114.114

[STATE]
STATE,AUTO
<?php }
}
