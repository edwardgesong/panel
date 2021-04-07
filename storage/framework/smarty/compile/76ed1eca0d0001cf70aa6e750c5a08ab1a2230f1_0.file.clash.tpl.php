<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-11 11:38:49
  from '/www/wwwroot/hi.mars333.com/resources/conf/clash.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f093449bac978_89399699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76ed1eca0d0001cf70aa6e750c5a08ab1a2230f1' => 
    array (
      0 => '/www/wwwroot/hi.mars333.com/resources/conf/clash.tpl',
      1 => 1581932049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:rule/ConnersHua_Pro.yaml' => 1,
    'file:rule/ConnersHua_BacktoCN.yaml' => 1,
    'file:rule/lhie1_Rule.yaml' => 1,
  ),
),false)) {
function content_5f093449bac978_89399699 (Smarty_Internal_Template $_smarty_tpl) {
?>#---------------------------------------------------#
## 更新：<?php echo date("Y-m-d h:i:s");?>

## 感谢：https://github.com/Hackl0us/SS-Rule-Snippet
## 链接：<?php echo $_smarty_tpl->tpl_vars['userapiUrl']->value;?>

#---------------------------------------------------#

# HTTP 代理端口
port: <?php if (array_key_exists("port",$_smarty_tpl->tpl_vars['opts']->value)) {
echo $_smarty_tpl->tpl_vars['opts']->value['port'];
} else { ?>7890<?php }?> 

# SOCKS5 代理端口
socks-port: <?php if (array_key_exists("socks-port",$_smarty_tpl->tpl_vars['opts']->value)) {
echo $_smarty_tpl->tpl_vars['opts']->value['socks-port'];
} else { ?>7891<?php }?> 

# Linux 和 macOS 的 redir 代理端口
redir-port: <?php if (array_key_exists("redir-port",$_smarty_tpl->tpl_vars['opts']->value)) {
echo $_smarty_tpl->tpl_vars['opts']->value['redir-port'];
} else { ?>7892<?php }?> 

# 允许局域网的连接
allow-lan: true

# 规则模式：Rule（规则） / Global（全局代理）/ Direct（全局直连）
mode: Rule

# 设置日志输出级别 (默认级别：silent，即不输出任何内容，以避免因日志内容过大而导致程序内存溢出）。
# 5 个级别：silent / info / warning / error / debug。级别越高日志输出量越大，越倾向于调试，若需要请自行开启。
log-level: <?php if (array_key_exists("log-level",$_smarty_tpl->tpl_vars['opts']->value)) {
echo $_smarty_tpl->tpl_vars['opts']->value['log-level'];
} else { ?>silent<?php }?>

# Clash 的 RESTful API
external-controller: '0.0.0.0:9090'

# RESTful API 的口令
secret: '<?php if (array_key_exists("secret",$_smarty_tpl->tpl_vars['opts']->value)) {
echo $_smarty_tpl->tpl_vars['opts']->value['secret'];
} else {
}?>' 

# 您可以将静态网页资源（如 clash-dashboard）放置在一个目录中，clash 将会服务于 `RESTful API/ui`
# 参数应填写配置目录的相对路径或绝对路径。
# external-ui: folder

<?php if (array_key_exists("dns",$_smarty_tpl->tpl_vars['opts']->value) && $_smarty_tpl->tpl_vars['opts']->value['dns'] == 1) {?>
  dns:
  enable: true
  ipv6: false
  # listen: 0.0.0.0:53
  # enhanced-mode: redir-host
  nameserver:
    - 1.2.4.8
    - 223.5.5.5
    - 114.114.114.114
  fallback:
    - tls://dns.rubyfish.cn:853

  # Clash DNS 请求逻辑：
  # (1) 当访问一个域名时， nameserver 与 fallback 列表内的所有服务器并发请求，得到域名对应的 IP 地址。
  # (2) clash 将选取 nameserver 列表内，解析最快的结果。
  # (3) 若解析结果中，IP 地址属于 国外，那么 Clash 将选择 fallback 列表内，解析最快的结果。

  # 注意：
  # (1) 如果您为了确保 DNS 解析结果无污染，请仅保留列表内以 tls:// 开头的 DNS 服务器，但是通常对于国内没有太大必要。
  # (2) 如果您不在乎可能解析到污染的结果，更加追求速度。请将 nameserver 列表的服务器插入至 fallback 列表内，并移除重复项。
<?php }?>

Proxy:
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Proxys']->value, 'Proxy');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Proxy']->value) {
?>
  - <?php echo json_encode($_smarty_tpl->tpl_vars['Proxy']->value,320);?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

Proxy Group:
<?php echo $_smarty_tpl->tpl_vars['ProxyGroups']->value;?>


# 规则
<?php if ($_smarty_tpl->tpl_vars['Profiles']->value == 'ConnersHua_Pro') {
$_smarty_tpl->_subTemplateRender('file:rule/ConnersHua_Pro.yaml', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['Profiles']->value == 'ConnersHua_BacktoCN') {
$_smarty_tpl->_subTemplateRender('file:rule/ConnersHua_BacktoCN.yaml', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else {
$_smarty_tpl->_subTemplateRender('file:rule/lhie1_Rule.yaml', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
