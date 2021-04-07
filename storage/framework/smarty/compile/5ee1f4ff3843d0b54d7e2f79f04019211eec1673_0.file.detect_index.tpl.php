<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-12 12:45:57
  from '/www/wwwroot/hi.mars333.com/resources/views/material/user/detect_index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0a9585a34083_12027459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ee1f4ff3843d0b54d7e2f79f04019211eec1673' => 
    array (
      0 => '/www/wwwroot/hi.mars333.com/resources/views/material/user/detect_index.tpl',
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
function content_5f0a9585a34083_12027459 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">审计规则公示</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-md-12">
            <section class="content-inner margin-top-no">

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <p>为了爱与和平，也同时为了系统的正常运行，特制定了如下过滤规则，当您使用节点执行这些动作时，您的通信就会被截断。</p>
                            <p>关于隐私：注意，我们仅用以下规则进行实时匹配和记录匹配到的规则，您的通信方向和通信内容我们不会做任何记录，请您放心。也请您理解我们对于这些不当行为的管理，谢谢。</p>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_auto_detect_ban'] === true) {?>
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['auto_detect_ban_type'] == 1) {?>
                            <p>请注意，每当您触发审计规则 <strong><?php echo $_smarty_tpl->tpl_vars['config']->value['auto_detect_ban_number'];?>
</strong> 次，将会被停止使用服务 <strong><?php echo $_smarty_tpl->tpl_vars['config']->value['auto_detect_ban_time'];?>
</strong> 分钟</p>
                        <?php } else { ?>
                            <p>请注意，审计将以以下规则执行：</p>
                            <dl class="dl-horizontal">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['config']->value['auto_detect_ban'], 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['value']->value['type'] == 'kill') {?>
                                <dt>触碰审计规则达 <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 次，将会被直接删除账号</dt>
                                <?php } else { ?>
                                <dt>触碰审计规则达 <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 次，将被封禁 <?php echo $_smarty_tpl->tpl_vars['value']->value['time'];?>
 分钟</dt>
                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </dl>
                        <?php }?>
					<?php }?>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="card-table">
                                <div class="table-responsive table-user">
                                    <?php echo $_smarty_tpl->tpl_vars['rules']->value->render();?>

                                    <table class="table">
                                        <tr>
                                            <th>ID</th>
                                            <th>名称</th>
                                            <th>描述</th>
                                            <th>正则表达式</th>
                                            <th>类型</th>
                                        </tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rules']->value, 'rule');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rule']->value) {
?>
                                            <tr>
                                                <td>#<?php echo $_smarty_tpl->tpl_vars['rule']->value->id;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['rule']->value->name;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['rule']->value->text;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['rule']->value->regex;?>
</td>
                                                <?php if ($_smarty_tpl->tpl_vars['rule']->value->type == 1) {?>
                                                    <td>数据包明文匹配</td>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['rule']->value->type == 2) {?>
                                                    <td>数据包 hex 匹配</td>
                                                <?php }?>
                                            </tr>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </table>
                                    <?php echo $_smarty_tpl->tpl_vars['rules']->value->render();?>

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
