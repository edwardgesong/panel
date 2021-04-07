<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-12 12:20:23
  from '/www/wwwroot/hi.mars333.com/resources/views/material/user/donate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0a8f87b9d617_18519225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3383a3a63a7e336a7f51987d5655cb6c3043e4e2' => 
    array (
      0 => '/www/wwwroot/hi.mars333.com/resources/views/material/user/donate.tpl',
      1 => 1581932049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/main.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:user/footer.tpl' => 1,
  ),
),false)) {
function content_5f0a8f87b9d617_18519225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">捐赠公示</h1>
        </div>
    </div>
    <div class="container">
        <section class="content-inner margin-top-no">
            <div class="row">


                <div class="col-lg-12 col-md-12">
                    <div class="card margin-bottom-no">
                        <div class="card-main">
                            <div class="card-inner">
                                <p>感谢各位捐赠来支撑服务器的日常支出！您可以在<a href="/user/code">充值界面</a>进行充值，这样就等同于捐赠了。</p>
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->isAdmin()) {?>
                                    <p>总收入：<?php echo $_smarty_tpl->tpl_vars['total_in']->value;?>
 元</p>
                                <?php }?>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="card margin-bottom-no">
                        <div class="card-main">
                            <div class="card-inner">
                                <div class="card-inner">
                                    <p class="card-heading">匿名捐赠</p>
                                    <p>当前设置：<code data-default="hide"><?php if ($_smarty_tpl->tpl_vars['user']->value->is_hide == 1) {?> 匿名 <?php } else { ?> 不匿名 <?php }?></code>
                                    </p>
                                    <div class="form-group form-group-label control-highlight-custom dropdown">
                                        <label class="floating-label" for="hide">匿名设置</label>
                                        <button id="hide" class="form-control maxwidth-edit" data-toggle="dropdown"
                                                value="<?php echo $_smarty_tpl->tpl_vars['user']->value->is_hide;?>
"></button>
                                        <ul class="dropdown-menu" aria-labelledby="hide">
                                            <li><a href="#" class="dropdown-option" onclick="return false;" val="1"
                                                   data="hide">匿名</a></li>
                                            <li><a href="#" class="dropdown-option" onclick="return false;" val="0"
                                                   data="hide">不匿名</a></li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="card-action">
                                    <div class="card-action-btn pull-left">
                                        <button class="btn btn-flat waves-attach" id="hide-update"><span class="icon">check</span>&nbsp;提交
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 col-md-12">
                    <div class="card margin-bottom-no">
                        <div class="card-main">
                            <div class="card-inner">

                                <div class="card-table">
                                    <div class="table-responsive table-user">
                                        <?php echo $_smarty_tpl->tpl_vars['codes']->value->render();?>

                                        <table class="table table-hover">
                                            <tr>
                                                <th>ID</th>
                                                <th>用户名</th>
                                                <th>类型</th>
                                                <th>操作</th>
                                                <th>备注</th>
                                                <th>时间</th>

                                            </tr>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['codes']->value, 'code');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['code']->value) {
?>
                                                <tr>
                                                    <td>#<?php echo $_smarty_tpl->tpl_vars['code']->value->id;?>
</td>
                                                    <?php if ($_smarty_tpl->tpl_vars['code']->value->user() != null && $_smarty_tpl->tpl_vars['code']->value->user()->is_hide == 0) {?>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['code']->value->user()->user_name;?>
</td>
                                                    <?php } else { ?>
                                                        <td>用户匿名或已注销</td>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['code']->value->type == -1) {?>
                                                        <td>充值捐赠</td>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['code']->value->type == -2) {?>
                                                        <td>财务支出</td>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['code']->value->type == -1) {?>
                                                        <td>捐赠 <?php echo $_smarty_tpl->tpl_vars['code']->value->number;?>
 元</td>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['code']->value->type == -2) {?>
                                                        <td>支出 <?php echo $_smarty_tpl->tpl_vars['code']->value->number;?>
 元</td>
                                                    <?php }?>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['code']->value->code;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['code']->value->usedatetime;?>
</td>
                                                </tr>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </table>
                                        <?php echo $_smarty_tpl->tpl_vars['codes']->value->render();?>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </section>
    </div>
</main>


<?php $_smarty_tpl->_subTemplateRender('file:user/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#hide-update").click(function () {
            $.ajax({
                type: "POST",
                url: "hide",
                dataType: "json",
                data: {
                    hide: $$getValue('hide')
                },
                success: (data) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = data.msg;
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${
                            data.msg
                            } 出现了一些错误`;
                }
            })
        })
    })
<?php echo '</script'; ?>
>
<?php }
}
