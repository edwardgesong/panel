<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-17 21:00:29
  from '/www/wwwroot/www.piyrw.com/resources/views/material/admin/shop/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4a8e6de5ed38_11035676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99b45165b574595e14d9e73ba6249ee3a22c97be' => 
    array (
      0 => '/www/wwwroot/www.piyrw.com/resources/views/material/admin/shop/edit.tpl',
      1 => 1581932049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/main.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_5e4a8e6de5ed38_11035676 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:admin/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">编辑商品</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-sm-12">
            <section class="content-inner margin-top-no">

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="name">名称</label>
                                <input class="form-control maxwidth-edit" id="name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->name;?>
">
                            </div>


                            <div class="form-group form-group-label">
                                <label class="floating-label" for="price">价格</label>
                                <input class="form-control maxwidth-edit" id="price" type="text" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->price;?>
">
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="auto_renew">自动续订天数</label>
                                <input class="form-control maxwidth-edit" id="auto_renew" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->auto_renew;?>
">
                                <p class="form-control-guide"><i class="material-icons">info</i>0为不允许自动续订，其他为到了那么多天之后就会自动从用户的账户上划钱抵扣
                                </p>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="bandwidth">流量（GB）</label>
                                <input class="form-control maxwidth-edit" id="bandwidth" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->bandwidth();?>
">
                            </div>


                            <div class="form-group form-group-label">
                                <div class="checkbox switch">
                                    <label for="auto_reset_bandwidth">
                                        <input <?php if ($_smarty_tpl->tpl_vars['shop']->value->auto_reset_bandwidth == 1) {?>checked<?php }?> class="access-hide"
                                               id="auto_reset_bandwidth" type="checkbox"><span
                                                class="switch-toggle"></span>续费时自动重置用户流量为上面这个流量值
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="expire">账户有效期天数</label>
                                <input class="form-control maxwidth-edit" id="expire" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->expire();?>
">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="class">等级</label>
                                <input class="form-control maxwidth-edit" id="class" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->user_class();?>
">
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="class_expire">等级有效期天数</label>
                                <input class="form-control maxwidth-edit" id="class_expire" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->class_expire();?>
">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="reset_exp">多少天内</label>
                                <input class="form-control maxwidth-edit" id="reset_exp" type="number"
                                       value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->reset_exp();?>
">
                            </div>


                            <div class="form-group form-group-label">
                                <label class="floating-label" for="reset">每多少天</label>
                                <input class="form-control maxwidth-edit" id="reset" type="number"
                                       value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->reset();?>
">
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="reset_value">重置流量为多少G</label>
                                <input class="form-control maxwidth-edit" id="reset_value" type="number"
                                       value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->reset_value();?>
">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="speedlimit">端口限速</label>
                                <input class="form-control maxwidth-edit" id="speedlimit" type="number"
                                       value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->speedlimit();?>
">
                            </div>


                            <div class="form-group form-group-label">
                                <label class="floating-label" for="connector">IP限制</label>
                                <input class="form-control maxwidth-edit" id="connector" type="number"
                                       value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->connector();?>
">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="content_extra">服务支持</label>
                                <input class="form-control maxwidth-edit" id="content_extra" type="text"
                                       value="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shop']->value->content_extra(), 'service', true);
$_smarty_tpl->tpl_vars['service']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->iteration++;
$_smarty_tpl->tpl_vars['service']->last = $_smarty_tpl->tpl_vars['service']->iteration === $_smarty_tpl->tpl_vars['service']->total;
$__foreach_service_0_saved = $_smarty_tpl->tpl_vars['service'];
echo $_smarty_tpl->tpl_vars['service']->value[0];?>
-<?php echo $_smarty_tpl->tpl_vars['service']->value[1];
if ($_smarty_tpl->tpl_vars['service']->last) {
} else { ?>;<?php }
$_smarty_tpl->tpl_vars['service'] = $__foreach_service_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>">
                                <p class="form-control-guide"><i class="material-icons">info</i>例：<code>check-全球节点分布;clear-快速客服响应</code>，减号左边为icon代号右边为文字,以;隔开
                                </p>
                                <p class="form-control-guide">icon代号参阅：<a
                                            href="https://material.io/tools/icons/?icon=clear&style=baseline">Material-icon</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-10 col-md-push-1">
                                        <button id="submit" type="submit"
                                                class="btn btn-block btn-brand waves-attach waves-light">保存
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        </div>


    </div>
</main>

<?php $_smarty_tpl->_subTemplateRender('file:admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
    window.addEventListener('load', () => {
        function submit() {
            if ($$.getElementById('auto_reset_bandwidth').checked) {
                var auto_reset_bandwidth = 1;
            } else {
                var auto_reset_bandwidth = 0;
            }

            let contentExtra = $$getValue('content_extra');
            if (contentExtra === '' || contentExtra === '-') {
                contentExtra = 'check-全球节点分布;check-快速客服响应;check-全平台客户端';
            }

            $.ajax({
                type: "PUT",
                url: "/admin/shop/<?php echo $_smarty_tpl->tpl_vars['shop']->value->id;?>
",
                dataType: "json",
                data: {
                    name: $$getValue('name'),
                    auto_reset_bandwidth,
                    price: $$getValue('price'),
                    auto_renew: $$getValue('auto_renew'),
                    bandwidth: $$getValue('bandwidth'),
                    speedlimit: $$getValue('speedlimit'),
                    connector: $$getValue('connector'),
                    expire: $$getValue('expire'),
                    class: $$getValue('class'),
                    class_expire: $$getValue('class_expire'),
                    reset: $$getValue('reset'),
                    reset_value: $$getValue('reset_value'),
                    reset_exp: $$getValue('reset_exp'),
                    content_extra: contentExtra,
                },
                success: data => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        window.setTimeout("location.href='/admin/shop'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: jqXHR => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `发生错误：${
                            jqXHR.status
                            }`;
                }
            });
        }

        $("html").keydown(event => {
            if (event.keyCode === 13) {
                login();
            }
        });

        $$.getElementById('submit').addEventListener('click', submit);

    })
<?php echo '</script'; ?>
>
<?php }
}
