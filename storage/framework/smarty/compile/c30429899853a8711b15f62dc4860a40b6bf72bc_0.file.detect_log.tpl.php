<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-18 18:14:09
  from '/www/wwwroot/www.piyrw.com/resources/views/material/user/detect_log.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4bb8f13ac287_72122540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c30429899853a8711b15f62dc4860a40b6bf72bc' => 
    array (
      0 => '/www/wwwroot/www.piyrw.com/resources/views/material/user/detect_log.tpl',
      1 => 1581932049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/main.tpl' => 1,
    'file:user/footer.tpl' => 1,
  ),
),false)) {
function content_5e4bb8f13ac287_72122540 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">审计记录查看</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-md-12">
            <section class="content-inner margin-top-no">

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <p>系统中所有审计记录。</p>
                            <p>关于隐私：注意，我们仅用以下规则进行实时匹配和记录匹配到的规则，您的通信方向和通信内容我们不会做任何记录，请您放心。也请您理解我们对于这些不当行为的管理，谢谢。</p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="card-table">
                                <div class="table-responsive table-user">
                                    <?php echo $_smarty_tpl->tpl_vars['logs']->value->render();?>

                                    <table class="table">
                                        <tr>
                                            <th>ID</th>
                                            <th>节点ID</th>
                                            <th>节点名称</th>
                                            <th>规则ID</th>
                                            <th>名称</th>
                                            <th>描述</th>
                                            <th>正则表达式</th>
                                            <th>类型</th>
                                            <th>时间</th>

                                        </tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['logs']->value, 'log');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['log']->value) {
?>
                                            <?php if ($_smarty_tpl->tpl_vars['log']->value->DetectRule() != null) {?>
                                                <tr>
                                                    <td>#<?php echo $_smarty_tpl->tpl_vars['log']->value->id;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['log']->value->node_id;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['log']->value->Node()->name;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['log']->value->list_id;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['log']->value->DetectRule()->name;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['log']->value->DetectRule()->text;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['log']->value->DetectRule()->regex;?>
</td>
                                                    <?php if ($_smarty_tpl->tpl_vars['log']->value->DetectRule()->type == 1) {?>
                                                        <td>数据包明文匹配</td>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['log']->value->DetectRule()->type == 2) {?>
                                                        <td>数据包 hex 匹配</td>
                                                    <?php }?>
                                                    <td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['log']->value->datetime);?>
</td>
                                                </tr>
                                            <?php }?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </table>
                                    <?php echo $_smarty_tpl->tpl_vars['logs']->value->render();?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>

    </div>
</main>


<?php $_smarty_tpl->_subTemplateRender('file:user/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
