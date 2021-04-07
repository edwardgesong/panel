<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-17 22:02:39
  from '/www/wwwroot/www.piyrw.com/resources/views/material/doc/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4a9cffa2e1b5_54716516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67da774e56ab31d9ea35661c201d998c00e64a70' => 
    array (
      0 => '/www/wwwroot/www.piyrw.com/resources/views/material/doc/index.tpl',
      1 => 1581932049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4a9cffa2e1b5_54716516 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta charset="UTF-8">
  <title><?php echo $_smarty_tpl->tpl_vars['appName']->value;?>
</title>
  <link rel="stylesheet" href="//unpkg.com/docsify/themes/vue.css">
</head>
<body>
  <nav>
    <a href="/">回到主页</a>
      <li><a href="/user/">用户中心</a>
        <ul>
          <li><a href="/user/edit">资料编辑</a></li>
          <li><a href="/user/node">节点中心</a></li>
          <li><a href="/user/code">充值捐赠</a></li>
          <li><a href="/user/shop">套餐购买</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <div id="docs">加载中...</div>
  <?php echo '<script'; ?>
>
    const root = window.location.host;
    window.$docsify = {
      name: '<?php echo $_smarty_tpl->tpl_vars['appName']->value;?>
',
      alias: {
            '/.*/_sidebar.md': '/_sidebar.md'
      },
      basePath: '<?php echo $_smarty_tpl->tpl_vars['basePath']->value;?>
',
      auto2top: true,
      loadSidebar: true,
      autoHeader: true,
      homepage: 'index.md',
      nameLink: '/doc/',
      el: '#docs',
      copyCode: {
          buttonText : '点击拷贝',
          errorText  : '拷贝失败',
          successText: '拷贝成功'
      },
      
      plugins: [
        function(hook, vm) {
          hook.beforeEach((markdown) => {
            const result = markdown.replace(/\/sublink\?type=(\w+)/g, `//${root}/sublink?type=$1`)
            return result
          })
        }
      ]
      
    }
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="//unpkg.com/docsify/lib/docsify.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="//unpkg.com/docsify/lib/plugins/emoji.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="//unpkg.com/docsify/lib/plugins/zoom-image.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="//unpkg.com/docsify-copy-code"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="//unpkg.com/prismjs/components/prism-yaml.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
