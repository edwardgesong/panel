<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-17 19:08:43
  from '/www/wwwroot/www.piyrw.com/resources/views/material/user/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4a743bc285e6_58459111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63134f00ea6565cfeef340053ba5605fa78ec2aa' => 
    array (
      0 => '/www/wwwroot/www.piyrw.com/resources/views/material/user/footer.tpl',
      1 => 1581932049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:analytics.tpl' => 1,
  ),
),false)) {
function content_5e4a743bc285e6_58459111 (Smarty_Internal_Template $_smarty_tpl) {
?><footer class="ui-footer">
    <div class="container">
        &copy;<?php echo date("Y");?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
 | Powered by <a href="/staff">SSPANEL</a>
        <?php if ($_smarty_tpl->tpl_vars['config']->value["enable_analytics_code"] === true) {
$_smarty_tpl->_subTemplateRender('file:analytics.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
    </div>
</footer>

<!-- js -->
<?php if ($_smarty_tpl->tpl_vars['config']->value["sspanelAnalysis"] === true) {?>
    <!-- Google Analytics -->
    <?php echo '<script'; ?>
>
        window.ga = window.ga || function () {
            (ga.q = ga.q || []).push(arguments)
        };
        ga.l = +new Date;
        ga('create', 'UA-111801619-3', 'auto');
        var hostDomain = window.location.host || document.location.host || document.domain;
        ga('set', 'dimension1', hostDomain);
        ga('send', 'pageview');

        (function () {
            function perfops() {
                var js = document.createElement('script');
                js.src = 'https://cdn.jsdelivr.net/npm/perfops-rom';
                document.body.appendChild(js);
            }

            if (document.readyState === 'complete') {
                perfops();
            } else {
                window.addEventListener('load', perfops);
            }
        })();
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 async src="https://www.google-analytics.com/analytics.js"><?php echo '</script'; ?>
>
    <!-- End Google Analytics -->
<?php }
echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0"><?php echo '</script'; ?>
>
<?php if (isset($_smarty_tpl->tpl_vars['geetest_html']->value)) {?>
    <?php echo '<script'; ?>
 src="//static.geetest.com/static/tools/gt.js"><?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 src="/theme/material/js/base.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/theme/material/js/project.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/clipboard@1.5.16/dist/clipboard.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>console.table([['数据库查询', '执行时间'], ['<?php echo count($_smarty_tpl->tpl_vars['queryLog']->value);?>
 次', '<?php echo $_smarty_tpl->tpl_vars['optTime']->value;?>
 ms']])<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
