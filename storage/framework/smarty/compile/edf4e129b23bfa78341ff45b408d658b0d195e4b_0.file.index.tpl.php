<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-17 19:08:43
  from '/www/wwwroot/www.piyrw.com/resources/views/material/user/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4a743bbfe631_75130279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edf4e129b23bfa78341ff45b408d658b0d195e4b' => 
    array (
      0 => '/www/wwwroot/www.piyrw.com/resources/views/material/user/index.tpl',
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
function content_5e4a743bbfe631_75130279 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_assignInScope('ssr_prefer', App\Utils\URL::SSRCanConnect($_smarty_tpl->tpl_vars['user']->value,0));
$_smarty_tpl->_assignInScope('pre_user', App\Utils\URL::cloneUser($_smarty_tpl->tpl_vars['user']->value));?>

<style>
.table {
    box-shadow: none;
}
table tr td:first-child {
    text-align: right;
    font-weight: bold;
}
</style>

<main class="content">

    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">用户中心</h1>
        </div>
    </div>
    <div class="container">
        <section class="content-inner margin-top-no">
            <div class="ui-card-wrap">

                <div class="col-xx-12 col-xs-6 col-lg-3">
                    <div class="card user-info">
                        <div class="user-info-main">
                            <div class="nodemain">
                                <div class="nodehead node-flex">
                                    <div class="nodename">帐号等级</div>
                                </div>
                                <div class="nodemiddle node-flex">
                                    <div class="nodetype">
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->class != 0) {?>
                                            <dd>VIP <?php echo $_smarty_tpl->tpl_vars['user']->value->class;?>
</dd>
                                        <?php } else { ?>
                                            <dd>普通用户</dd>
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="nodemiddle node-flex">
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->class_expire != "1989-06-04 00:05:00") {?>
                                        <div style="font-size: 14px">等级到期时间 <?php echo $_smarty_tpl->tpl_vars['user']->value->class_expire;?>
</div>
                                    <?php } else { ?>
                                        <div style="font-size: 14px">账户等级不会过期</div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <div class="user-info-bottom">
                            <div class="nodeinfo node-flex">
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->class != 0) {?>
                                    <span><i class="icon icon-md">add_circle</i>到期流量清空</span>
                                <?php } else { ?>
                                    <span><i class="icon icon-md">add_circle</i>升级解锁 VIP 节点</span>
                                <?php }?>
                                <a href="/user/shop" class="card-tag tag-orange">商店</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xx-12 col-xs-6 col-lg-3">
                    <div class="card user-info">
                        <div class="user-info-main">
                            <div class="nodemain">
                                <div class="nodehead node-flex">
                                    <div class="nodename">余额</div>
                                </div>
                                <div class="nodemiddle node-flex">
                                    <div class="nodetype">
                                        <?php echo $_smarty_tpl->tpl_vars['user']->value->money;?>
 CNY
                                    </div>
                                </div>
                                <div class="nodemiddle node-flex">
                                    <div style="font-size: 14px">账户有效时间 <?php echo $_smarty_tpl->tpl_vars['user']->value->expire_in;?>
</div>
                                </div>
                            </div>
                        </div>
                        <div class="user-info-bottom">
                            <div class="nodeinfo node-flex">
                                <span><i class="icon icon-md">attach_money</i>到期账户自动删除</span>
                                <a href="/user/code" class="card-tag tag-green">充值</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xx-12 col-xs-6 col-lg-3">
                    <div class="card user-info">
                        <div class="user-info-main">
                            <div class="nodemain">
                                <div class="nodehead node-flex">
                                    <div class="nodename">在线设备数</div>
                                </div>
                                <div class="nodemiddle node-flex">
                                    <div class="nodetype">
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->node_connector != 0) {?>
                                            <dd><?php echo $_smarty_tpl->tpl_vars['user']->value->online_ip_count();?>
 / <?php echo $_smarty_tpl->tpl_vars['user']->value->node_connector;?>
</dd>
                                        <?php } else { ?>
                                            <dd><?php echo $_smarty_tpl->tpl_vars['user']->value->online_ip_count();?>
 / 不限制</dd>
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="nodemiddle node-flex">
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->lastSsTime() != "从未使用喵") {?>
                                        <div style="font-size: 14px">上次使用：<?php echo $_smarty_tpl->tpl_vars['user']->value->lastSsTime();?>
</div>
                                    <?php } else { ?>
                                        <div style="font-size: 14px">从未使用过</div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <div class="user-info-bottom">
                            <div class="nodeinfo node-flex">
                                <span><i class="icon icon-md">donut_large</i>在线设备/设备限制数</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xx-12 col-xs-6 col-lg-3">
                    <div class="card user-info">
                        <div class="user-info-main">
                            <div class="nodemain">
                                <div class="nodehead node-flex">
                                    <div class="nodename">端口速率</div>
                                </div>
                                <div class="nodemiddle node-flex">
                                    <div class="nodetype">
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->node_speedlimit != 0) {?>
                                            <dd><code><?php echo $_smarty_tpl->tpl_vars['user']->value->node_speedlimit;?>
</code>Mbps</dd>
                                        <?php } else { ?>
                                            <dd>无限制</dd>
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="nodemiddle node-flex">
                                    <div style="font-size: 14px">实际速率受限于运营商带宽上限</div>
                                </div>
                            </div>
                        </div>
                        <div class="user-info-bottom">
                            <div class="nodeinfo node-flex">
                                <span><i class="icon icon-md">signal_cellular_alt</i>账户最高下行网速</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="ui-card-wrap">

                <div class="col-xx-12 col-sm-5">

                    <div class="card">
                        <div class="card-main">
                        <div class="card-inner margin-bottom-no">
                            <p class="card-heading" style="margin-bottom: 0;"><i class="icon icon-md">account_circle</i>流量使用情况</p>

                                <p>下次流量重置时间：<?php echo $_smarty_tpl->tpl_vars['user']->value->valid_use_loop();?>
</p>

                                <div class="progressbar">
                                    <div class="before"></div>
                                    <div class="bar tuse color3"
                                         style="width:calc(<?php echo $_smarty_tpl->tpl_vars['user']->value->transfer_enable == 0 ? 0 : ($_smarty_tpl->tpl_vars['user']->value->u+$_smarty_tpl->tpl_vars['user']->value->d-$_smarty_tpl->tpl_vars['user']->value->last_day_t)/$_smarty_tpl->tpl_vars['user']->value->transfer_enable*100;?>
%);"></div>
                                    <div class="label-flex">
                                        <div class="label la-top">
                                            <div class="bar ard color3"></div>
                                            <span class="traffic-info">今日已用</span>
                                            <code class="card-tag tag-red"><?php echo $_smarty_tpl->tpl_vars['user']->value->TodayusedTraffic();?>
</code>
                                        </div>
                                    </div>
                                </div>
                                <div class="progressbar">
                                    <div class="before"></div>
                                    <div class="bar ard color2"
                                         style="width:calc(<?php echo $_smarty_tpl->tpl_vars['user']->value->transfer_enable == 0 ? 0 : $_smarty_tpl->tpl_vars['user']->value->last_day_t/$_smarty_tpl->tpl_vars['user']->value->transfer_enable*100;?>
%);">
                                        <span></span>
                                    </div>
                                    <div class="label-flex">
                                        <div class="label la-top">
                                            <div class="bar ard color2"><span></span></div>
                                            <span class="traffic-info">过去已用</span>
                                            <code class="card-tag tag-orange"><?php echo $_smarty_tpl->tpl_vars['user']->value->LastusedTraffic();?>
</code>
                                        </div>
                                    </div>
                                </div>
                                <div class="progressbar">
                                    <div class="before"></div>
                                    <div class="bar remain color"
                                         style="width:calc(<?php echo $_smarty_tpl->tpl_vars['user']->value->transfer_enable == 0 ? 0 : ($_smarty_tpl->tpl_vars['user']->value->transfer_enable-($_smarty_tpl->tpl_vars['user']->value->u+$_smarty_tpl->tpl_vars['user']->value->d))/$_smarty_tpl->tpl_vars['user']->value->transfer_enable*100;?>
%);">
                                        <span></span>
                                    </div>
                                    <div class="label-flex">
                                        <div class="label la-top">
                                            <div class="bar ard color"><span></span></div>
                                            <span class="traffic-info">剩余流量</span>
                                            <code class="card-tag tag-green" id="remain"><?php echo $_smarty_tpl->tpl_vars['user']->value->unusedTraffic();?>
</code>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="card-inner margin-bottom-no">
                                <p class="card-heading"><i class="icon icon-md">account_circle</i>签到</p>

                                    <p>上次签到时间：<?php echo $_smarty_tpl->tpl_vars['user']->value->lastCheckInTime();?>
</p>

                                    <p id="checkin-msg"></p>

                                    <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
                                        <div id="popup-captcha"></div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['recaptcha_sitekey']->value != null && $_smarty_tpl->tpl_vars['user']->value->isAbleToCheckin()) {?>
                                        <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['recaptcha_sitekey']->value;?>
"></div>
                                    <?php }?>

                                    <div class="card-action">
                                        <div class="usercheck pull-left">
                                            <?php if ($_smarty_tpl->tpl_vars['user']->value->isAbleToCheckin()) {?>
                                                <div id="checkin-btn">
                                                    <button id="checkin" class="btn btn-brand btn-flat"><span
                                                                class="icon">check</span>&nbsp;点我签到&nbsp;
                                                        <div><span class="icon">screen_rotation</span>&nbsp;或者摇动手机签到
                                                        </div>
                                                    </button>
                                                </div>
                                            <?php } else { ?>
                                                <p><a class="btn btn-brand disabled btn-flat" href="#"><span
                                                                class="icon">check</span>&nbsp;今日已签到</a></p>
                                            <?php }?>
                                        </div>
                                    </div>
                                </dl>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner margin-bottom-no">
                                <p class="card-heading"><i class="icon icon-md">notifications_active</i>公告栏</p>
                                <?php if ($_smarty_tpl->tpl_vars['ann']->value != null) {?>
                                    <p><?php echo $_smarty_tpl->tpl_vars['ann']->value->content;?>
</p>
                                    <br/>
                                    <strong>查看所有公告请<a href="/user/announcement">点击这里</a></strong>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['config']->value["enable_admin_contact"] === true) {?>
                                    <p class="card-heading">管理员联系方式</p>
                                    <?php if ($_smarty_tpl->tpl_vars['config']->value["admin_contact1"] != null) {?>
                                        <p><?php echo $_smarty_tpl->tpl_vars['config']->value["admin_contact1"];?>
</p>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['config']->value["admin_contact2"] != null) {?>
                                        <p><?php echo $_smarty_tpl->tpl_vars['config']->value["admin_contact2"];?>
</p>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['config']->value["admin_contact3"] != null) {?>
                                        <p><?php echo $_smarty_tpl->tpl_vars['config']->value["admin_contact3"];?>
</p>
                                    <?php }?>
                                <?php }?>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xx-12 col-sm-7">

                    <div class="card quickadd">
                        <div class="card-main">
                            <div class="card-inner">
                                <div class="cardbtn-edit">
                                    <div class="card-heading"><i class="icon icon-md">phonelink</i> 快速使用</div>
                                </div>

								<nav class="tab-nav margin-top-no">
									<ul class="nav nav-list">
										<li class="active">
											<a class="" data-toggle="tab" href="#sub_center"><i class="icon icon-lg">info_outline</i>&nbsp;订阅中心</a>
										</li>
										<li>
											<a class="" data-toggle="tab" href="#info_center"><i class="icon icon-lg">flight_takeoff</i>&nbsp;连接信息</a>
										</li>
										<li>
											<a class="" data-toggle="tab" href="#other"><i class="icon icon-lg">add_circle</i>&nbsp;其他</a>
										</li>
									</ul>
								</nav>

								<div class="card-inner">
									<div class="tab-content">


										<div class="tab-pane fade" id="other">
                                            <p>清理订阅缓存：
                                                <button class="kaobei btn btn-subscription" type="button" id="delSubCache">点击清理</button>
                                            </p>
										</div>


										<div class="tab-pane fade" id="info_center">
											<p>您的链接信息：</p>

											<?php if (App\Utils\URL::SSRCanConnect($_smarty_tpl->tpl_vars['user']->value)) {?>

												<?php $_smarty_tpl->_assignInScope('user', App\Utils\URL::getSSRConnectInfo($_smarty_tpl->tpl_vars['pre_user']->value));?>
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td><strong>端口</strong></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->port;?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>密码</strong></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->passwd;?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>自定义加密</strong></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->method;?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>自定义协议</strong></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->protocol;?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>自定义混淆</strong></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->obfs;?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>自定义混淆参数</strong></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->obfs_param;?>
</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
												<hr/>
												<p>您好，您目前的 加密方式，混淆或协议 为 SSR 模式，请您选用支持 SSR 的客户端来连接，或者到 <a href="/user/edit">资料编辑</a> 页面修改后再来查看此处。</p>
                                                <p>同时, ShadowsocksR 单端口多用户的连接不受您设置的影响，您可以在此使用相应的客户端进行连接</p>

											<?php } elseif (App\Utils\URL::SSCanConnect($_smarty_tpl->tpl_vars['user']->value)) {?>

                                                <?php $_smarty_tpl->_assignInScope('user', App\Utils\URL::getSSConnectInfo($_smarty_tpl->tpl_vars['pre_user']->value));?>
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td><strong>端口</strong></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->port;?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>密码</strong></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->passwd;?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>自定义加密</strong></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->method;?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>自定义混淆</strong></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->obfs;?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>自定义混淆参数</strong></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->obfs_param;?>
</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
												<hr/>
                                                <p>您好，您目前的 加密方式，混淆或协议 为 SS 模式，请您选用支持 SS 协议的客户端来连接，或者到 <a href="/user/edit">资料编辑</a> 页面修改后再来查看此处。</p>
                                                <p>同时, Shadowsocks 单端口多用户的连接不受您设置的影响，您可以在此使用相应的客户端进行连接</p>

                                            <?php } else { ?>

                                                <p>您的账户连接信息存在异常，请联系管理员</p>

											<?php }?>

										</div>

										<div class="tab-pane fade active in" id="sub_center">
											<nav class="tab-nav margin-top-no">
												<ul class="nav nav-list">
													<li class="active">
														<a class="" data-toggle="tab" href="#sub_center_general"><i class="icon icon-lg">desktop_windows</i>&nbsp;General</a>
													</li>
													<li>
														<a class="" data-toggle="tab" href="#sub_center_windows"><i class="icon icon-lg">desktop_windows</i>&nbsp;Windows</a>
													</li>
													<li>
														<a class="" data-toggle="tab" href="#sub_center_mac"><i class="icon icon-lg">laptop_mac</i>&nbsp;MacOS</a>
													</li>
													<li>
														<a class="" data-toggle="tab" href="#sub_center_ios"><i class="icon icon-lg">phone_iphone</i>&nbsp;iOS</a>
													</li>
													<li>
														<a class="" data-toggle="tab" href="#sub_center_android"><i class="icon icon-lg">android</i>&nbsp;Android</a>
													</li>
												</ul>
											</nav>

											<div class="tab-pane fade active in" id="sub_center_general">
												<p><span class="icon icon-lg text-white">filter_1</span> [ SS ]：
													<a id="general_ss" class="copy-config btn-dl" onclick=Copyconfig("/user/getUserAllURL?type=ss","#general_ss","")><i class="material-icons icon-sm">how_to_vote</i>全部 URL</a>
												</p>
												<hr/>
												<p><span class="icon icon-lg text-white">filter_2</span> [ SSR ]：
													<a class="copy-text btn-dl" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["ssr"];?>
"><i class="material-icons icon-sm">how_to_vote</i>订阅链接</a>.<a id="general_ssr" class="copy-config btn-dl" onclick=Copyconfig("/user/getUserAllURL?type=ssr","#general_ssr","")><i class="material-icons icon-sm">how_to_vote</i>全部 URL</a>
												</p>
												<hr/>
												<p><span class="icon icon-lg text-white">filter_3</span> [ VMess ]：
													<a class="copy-text btn-dl" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["v2ray"];?>
"><i class="material-icons icon-sm">how_to_vote</i>订阅链接</a>.<a id="general_v2ray" class="copy-config btn-dl" onclick=Copyconfig("/user/getUserAllURL?type=v2ray","#general_v2ray","")><i class="material-icons icon-sm">how_to_vote</i>全部 URL</a>
												</p>
											</div>

											<div class="tab-pane fade" id="sub_center_windows">
												<p><span class="icon icon-lg text-white">filter_1</span> <a class="btn-dl" href="<?php if ($_smarty_tpl->tpl_vars['config']->value["subscribe_client"] === true) {
if ($_smarty_tpl->tpl_vars['config']->value["subscribe_client_url"] == '') {?>/user/getPcClient<?php } else {
echo $_smarty_tpl->tpl_vars['config']->value["subscribe_client_url"];?>
/getClient/<?php echo $_smarty_tpl->tpl_vars['getClient']->value;
}?>?type=ss-win<?php } else { ?>https://github.com/shadowsocks/shadowsocks-windows/releases<?php }?>"><i class="material-icons">save_alt</i> 下载</a> SS - [ SS ]：</p>
													<p>教程文档：<a class="btn-dl" href="/doc/#/Windows/Shadowsocks"><i class="material-icons icon-sm">how_to_vote</i>点击查看</a></p>
													<p>使用方式：<a id="win_ss" class="copy-config btn-dl" onclick=Copyconfig("/user/getUserAllURL?type=ss","#win_ss","")><i class="material-icons icon-sm">how_to_vote</i>全部 URL</a></p>
												<hr/>
												<p><span class="icon icon-lg text-white">filter_2</span> <a class="btn-dl" href="<?php if ($_smarty_tpl->tpl_vars['config']->value["subscribe_client"] === true) {
if ($_smarty_tpl->tpl_vars['config']->value["subscribe_client_url"] == '') {?>/user/getPcClient<?php } else {
echo $_smarty_tpl->tpl_vars['config']->value["subscribe_client_url"];?>
/getClient/<?php echo $_smarty_tpl->tpl_vars['getClient']->value;
}?>?type=ssd-win<?php } else { ?>https://github.com/CGDF-Github/SSD-Windows/releases<?php }?>"><i class="material-icons">save_alt</i> 下载</a> SSD - [ SS ]：</p>
													<p>教程文档：<a class="btn-dl" href="/doc/#/Windows/ShadowsocksD"><i class="material-icons icon-sm">how_to_vote</i>点击查看</a></p>
													<p>使用方式：<a class="copy-text btn-dl" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["ssd"];?>
"><i class="material-icons icon-sm">how_to_vote</i>拷贝链接</a>.<a id="win_ssd" class="copy-config btn-dl" onclick=Copyconfig("/user/getUserAllURL?type=ssd","#win_ssd","")><i class="material-icons icon-sm">how_to_vote</i>全部 URL</a></p>
												<hr/>
												<p><span class="icon icon-lg text-white">filter_3</span> <a class="btn-dl" href="<?php if ($_smarty_tpl->tpl_vars['config']->value["subscribe_client"] === true) {
if ($_smarty_tpl->tpl_vars['config']->value["subscribe_client_url"] == '') {?>/user/getPcClient<?php } else {
echo $_smarty_tpl->tpl_vars['config']->value["subscribe_client_url"];?>
/getClient/<?php echo $_smarty_tpl->tpl_vars['getClient']->value;
}?>?type=ssr-win<?php } else { ?>https://github.com/shadowsocksrr/shadowsocksr-csharp/releases<?php }?>"><i class="material-icons">save_alt</i> 下载</a> SSR(R) - [ SS/SSR ]：</p>
													<p>教程文档：<a class="btn-dl" href="/doc/#/Windows/ShadowsocksR"><i class="material-icons icon-sm">how_to_vote</i>点击查看</a></p>
													<p>使用方式：<a class="copy-text btn-dl" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["ssr"];?>
"><i class="material-icons icon-sm">how_to_vote</i>订阅链接</a>.<a id="win_ssr" class="copy-config btn-dl" onclick=Copyconfig("/user/getUserAllURL?type=ssr","#win_ssr","")><i class="material-icons icon-sm">how_to_vote</i>全部 URL</a></p>
												<hr/>
												<p><span class="icon icon-lg text-white">filter_4</span> <a class="btn-dl" href="<?php if ($_smarty_tpl->tpl_vars['config']->value["subscribe_client"] === true) {
if ($_smarty_tpl->tpl_vars['config']->value["subscribe_client_url"] == '') {?>/user/getPcClient<?php } else {
echo $_smarty_tpl->tpl_vars['config']->value["subscribe_client_url"];?>
/getClient/<?php echo $_smarty_tpl->tpl_vars['getClient']->value;
}?>?type=v2rayn-win<?php } else { ?>https://github.com/2dust/v2rayN/releases<?php }?>"><i class="material-icons">save_alt</i> 下载</a> V2RayN - [ SS/VMess ]：</p>
													<p>教程文档：<a class="btn-dl" href="/doc/#/Windows/V2RayN"><i class="material-icons icon-sm">how_to_vote</i>点击查看</a></p>
													<p>使用方式：<a class="copy-text btn-dl" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["v2ray"];?>
"><i class="material-icons icon-sm">how_to_vote</i>订阅链接</a>.<a id="win_v2rayn" class="copy-config btn-dl" onclick=Copyconfig("/user/getUserAllURL?type=v2ray","#win_v2rayn","")><i class="material-icons icon-sm">how_to_vote</i>全部 URL</a></p>
												<hr/>
												<p><span class="icon icon-lg text-white">filter_5</span> <a class="btn-dl" href="https://github.com/Fndroid/clash_for_windows_pkg/releases"><i class="material-icons">save_alt</i> 下载</a> Clash for Windows - [ SS/VMess ]：</p>
													<p>教程文档：<a class="btn-dl" href="/doc/#/Windows/Clash-for-Windows"><i class="material-icons icon-sm">how_to_vote</i>点击查看</a></p>
													<p>使用方式：<a class="btn-dl" href="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["clash"];?>
"><i class="material-icons icon-sm">how_to_vote</i>配置下载</a>.<a class="btn-dl" href="clash://install-config?url=<?php echo urlencode($_smarty_tpl->tpl_vars['subInfo']->value["clash"]);?>
"><i class="material-icons icon-sm">how_to_vote</i>Clash for Windows 一键导入</a></p>
                                            	<hr/>
												<p><span class="icon icon-lg text-white">filter_6</span> <a class="btn-dl" href="#"><i class="material-icons">save_alt</i> 下载</a> ClashR for Windows - [ SS/SSR/VMess ]：</p>
													<p>教程文档：自行摸索</p>
													<p>使用方式：<a class="btn-dl" href="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["clashr"];?>
"><i class="material-icons icon-sm">how_to_vote</i>配置下载</a>.<a class="btn-dl" href="clash://install-config?url=<?php echo urlencode($_smarty_tpl->tpl_vars['subInfo']->value["clashr"]);?>
"><i class="material-icons icon-sm">how_to_vote</i>ClashR for Windows 一键导入</a></p>
											</div>

											<div class="tab-pane fade" id="sub_center_mac">
												<p><span class="icon icon-lg text-white">filter_1</span> <a class="btn-dl" href="https://nssurge.com/mac/v3/Surge-latest.zip"><i class="material-icons">save_alt</i> 下载</a> Surge - [ SS/VMess ]：</p>
													<p>教程文档：<a class="btn-dl" href="/doc/#/macOS/Surge"><i class="material-icons icon-sm">how_to_vote</i>点击查看</a></p>
													<p>使用方式：<a class="copy-text btn-dl" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["surge4"];?>
"><i class="material-icons icon-sm">how_to_vote</i>4.x 托管</a>.<a class="copy-text btn-dl" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["surge3"];?>
"><i class="material-icons icon-sm">how_to_vote</i>3.x 托管</a>.<a class="copy-text btn-dl" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["surge_node"];?>
"><i class="material-icons icon-sm">how_to_vote</i>3.x 节点</a>.<a class="copy-text btn-dl" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["surge2"];?>
"><i class="material-icons icon-sm">how_to_vote</i>2.x 托管</a></p>
												<hr/>
												<p><span class="icon icon-lg text-white">filter_2</span> <a class="btn-dl" href="https://github.com/yichengchen/clashX/releases"><i class="material-icons">save_alt</i> 下载</a> ClashX - [ SS/VMess ]：</p>
													<p>教程文档：<a class="btn-dl" href="/doc/#/macOS/ClashX"><i class="material-icons icon-sm">how_to_vote</i>点击查看</a></p>
													<p>使用方式：<a class="btn-dl" href="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["clash"];?>
"><i class="material-icons icon-sm">how_to_vote</i>配置下载</a>.<a class="btn-dl" href="clash://install-config?url=<?php echo urlencode($_smarty_tpl->tpl_vars['subInfo']->value["clash"]);?>
"><i class="material-icons icon-sm">how_to_vote</i>ClashX 一键导入</a></p>
                                                <hr/>
												<p><span class="icon icon-lg text-white">filter_3</span> <a class="btn-dl" href=""><i class="material-icons">save_alt</i> 下载</a> ClashXR - [ SS/SSR/VMess ]：</p>
													<p>教程文档：自行摸索</p>
													<p>使用方式：<a class="btn-dl" href="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["clashr"];?>
"><i class="material-icons icon-sm">how_to_vote</i>配置下载</a>.<a class="btn-dl" href="clash://install-config?url=<?php echo urlencode($_smarty_tpl->tpl_vars['subInfo']->value["clashr"]);?>
"><i class="material-icons icon-sm">how_to_vote</i>ClashXR 一键导入</a></p>
											</div>

											<div class="tab-pane fade" id="sub_center_ios">
											<?php if ($_smarty_tpl->tpl_vars['display_ios_class']->value >= 0) {?>
												<?php if ($_smarty_tpl->tpl_vars['user']->value->class >= $_smarty_tpl->tpl_vars['display_ios_class']->value && $_smarty_tpl->tpl_vars['user']->value->get_top_up() >= $_smarty_tpl->tpl_vars['display_ios_topup']->value) {?>
												<div><span class="icon icon-lg text-white">account_box</span> 本站iOS账户：</div>
												<div class="float-clear">
													<input type="text" class="input form-control form-control-monospace cust-link col-xx-12 col-sm-8 col-lg-7" name="input1" readonly value="<?php echo $_smarty_tpl->tpl_vars['ios_account']->value;?>
" readonly="true">
													<button class="copy-text btn btn-subscription col-xx-12 col-sm-3 col-lg-2" type="button" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['ios_account']->value;?>
">点击复制</button>
                                                    <br>
												</div>
												<div><span class="icon icon-lg text-white">lock</span> 本站iOS密码：</div>
												<div class="float-clear">
													<input type="text" class="input form-control form-control-monospace cust-link col-xx-12 col-sm-8 col-lg-7" name="input1" readonly value="<?php echo $_smarty_tpl->tpl_vars['ios_password']->value;?>
" readonly="true">
													<button class="copy-text btn btn-subscription col-xx-12 col-sm-3 col-lg-2" type="button" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['ios_password']->value;?>
">点击复制</button>
                                                    <br>
												</div>
												<p><span class="icon icon-lg text-white">error</span><strong>禁止将账户分享给他人！</strong></p>
												<hr/>
												<?php }?>
											<?php }?>
												<p><span class="icon icon-lg text-white">filter_1</span> <a class="btn-dl" href="https://itunes.apple.com/us/app/surge-3/id1442620678?ls=1&mt=8"><i class="material-icons">save_alt</i> 下载</a> Surge - [ SS/VMess ]：</p>
													<p>教程文档：<a class="btn-dl" href="/doc/#/iOS/Surge"><i class="material-icons icon-sm">how_to_vote</i>点击查看</a></p>
													<p>相关说明：Surge 4 托管配置中可能含有 VMess 节点，如您未订阅 Surge 4 请使用 3.x 一键.</p>
													<p>使用方式：<a class="btn-dl" href="surge3:///install-config?url=<?php echo urlencode($_smarty_tpl->tpl_vars['subInfo']->value["surge4"]);?>
"><i class="material-icons icon-sm">how_to_vote</i>4.x 一键</a>.<a class="btn-dl" href="surge3:///install-config?url=<?php echo urlencode($_smarty_tpl->tpl_vars['subInfo']->value["surge3"]);?>
"><i class="material-icons icon-sm">how_to_vote</i>3.x 一键</a>.<a class="copy-text btn-dl" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["surge_node"];?>
"><i class="material-icons icon-sm">how_to_vote</i>节点 List</a>.<a class="btn-dl" href="surge:///install-config?url=<?php echo urlencode($_smarty_tpl->tpl_vars['subInfo']->value["surge2"]);?>
"><i class="material-icons icon-sm">how_to_vote</i>2.x 一键</a></p>
												<hr/>
												<p><span class="icon icon-lg text-white">filter_2</span> <a class="btn-dl" href="https://itunes.apple.com/us/app/kitsunebi-proxy-utility/id1446584073?ls=1&mt=8"><i class="material-icons">save_alt</i> 下载</a> Kitsunebi - [ SS/VMess ]：</p>
													<p>教程文档：<a class="btn-dl" href="/doc/#/iOS/Kitsunebi"><i class="material-icons icon-sm">how_to_vote</i>点击查看</a></p>
													<p>使用方式：<a class="copy-text btn-dl" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["kitsunebi"];?>
"><i class="material-icons icon-sm">how_to_vote</i>SS + V2 混合订阅</a></p>
												<hr/>
												<p><span class="icon icon-lg text-white">filter_3</span> <a class="btn-dl" href="https://itunes.apple.com/us/app/quantumult/id1252015438?ls=1&mt=8"><i class="material-icons">save_alt</i> 下载</a> Quantumult - [ SS/SSR/VMess ]：</p>
													<p>教程文档：<a class="btn-dl" href="/doc/#/iOS/Quantumult_sub"><i class="material-icons icon-sm">how_to_vote</i>点击查看</a></p>
													<p>使用方式：<a class="copy-text btn-dl" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["quantumult_v2"];?>
"><i class="material-icons icon-sm">how_to_vote</i>V2 订阅</a>.<a class="copy-text btn-dl" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["ssr"];?>
"><i class="material-icons icon-sm">how_to_vote</i>SSR 订阅</a>.<a id="quan_sub" class="copy-config btn-dl" onclick=Copyconfig("<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["quantumult_sub"];?>
","#quan_sub","quantumult://settings?configuration=clipboard")><i class="material-icons icon-sm">how_to_vote</i>完整订阅配置</a>.<a id="quan_conf" class="copy-config btn-dl" onclick=Copyconfig("<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["quantumult_conf"];?>
","#quan_conf","quantumult://settings?configuration=clipboard")><i class="material-icons icon-sm">how_to_vote</i>完整策略组配置</a></p>
												<hr/>
												<p><span class="icon icon-lg text-white">filter_4</span> <a class="btn-dl" href="https://apps.apple.com/us/app/quantumult-x/id1443988620"><i class="material-icons">save_alt</i> 下载</a> QuantumultX - [ SS/SSR/VMess ]：</p>
													<p>教程文档：<a class="btn-dl" href="/doc/#/iOS/QuantumultX"><i class="material-icons icon-sm">how_to_vote</i>点击查看</a></p>
													<p>使用方式：<a class="copy-text btn-dl" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["quantumultx"];?>
"><i class="material-icons icon-sm">how_to_vote</i>混合订阅</a>.<a class="copy-text btn-dl" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["ssr"];?>
"><i class="material-icons icon-sm">how_to_vote</i>SSR 订阅</a></p>
												<hr/>
												<p><span class="icon icon-lg text-white">filter_5</span> <a class="btn-dl" href="https://itunes.apple.com/us/app/shadowrocket/id932747118?mt=8"><i class="material-icons">save_alt</i> 下载</a> Shadowrocket - [ SS/SSR/VMess ]：</p>
													<p>教程文档：<a class="btn-dl" href="/doc/#/iOS/Shadowrocket"><i class="material-icons icon-sm">how_to_vote</i>点击查看</a></p>
													<p>使用方式：<a class="btn-dl" onclick=AddSub("<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["shadowrocket"];?>
","sub://")><i class="material-icons icon-sm">how_to_vote</i>SS(R) + V2 混合订阅</a></p>
											</div>

											<div class="tab-pane fade" id="sub_center_android">
												<p><span class="icon icon-lg text-white">filter_1</span> <a class="btn-dl" href="https://github.com/shadowsocks/shadowsocks-android/releases"><i class="material-icons">save_alt</i> 下载</a> SS - [ SS ]：</p>
													<p>教程文档：<a class="btn-dl" href="/doc/#/Android/Shadowsocks-Android"><i class="material-icons icon-sm">how_to_vote</i>点击查看</a></p>
													<p>使用方式：<a class="copy-text btn-dl" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["ssa"];?>
"><i class="material-icons icon-sm">how_to_vote</i>拷贝链接</a></p>
												<hr/>
												<p><span class="icon icon-lg text-white">filter_2</span> <a class="btn-dl" href="https://github.com/CGDF-Github/SSD-Android/releases"><i class="material-icons">save_alt</i> 下载</a> SSD - [ SS ]：</p>
													<p>教程文档：<a class="btn-dl" href="/doc/#/Android/ShadowsocksD"><i class="material-icons icon-sm">how_to_vote</i>点击查看</a></p>
													<p>使用方式：<a class="copy-text btn-dl" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["ssd"];?>
"><i class="material-icons icon-sm">how_to_vote</i>拷贝链接</a>.<a id="android_ssd" class="copy-config btn-dl" onclick=Copyconfig("/user/getUserAllURL?type=ssd","#android_ssd","")><i class="material-icons icon-sm">how_to_vote</i>全部 URL</a></p>
												<hr/>
												<p><span class="icon icon-lg text-white">filter_3</span> <a class="btn-dl" href="#"><i class="material-icons">save_alt</i> 下载</a> SSR - [ SSR ]：</p>
													<p>教程文档：<a class="btn-dl" href="/doc/#/Android/ShadowsocksR"><i class="material-icons icon-sm">how_to_vote</i>点击查看</a></p>
													<p>使用方式：<a class="copy-text btn-dl" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["ssr"];?>
"><i class="material-icons icon-sm">how_to_vote</i>拷贝链接</a></p>
												<hr/>
												<p><span class="icon icon-lg text-white">filter_4</span> <a class="btn-dl" href="https://github.com/2dust/v2rayNG/releases"><i class="material-icons">save_alt</i> 下载</a> V2rayNG - [ SS/VMess ]：</p>
													<p>教程文档：<a class="btn-dl" href="/doc/#/Android/V2rayNG"><i class="material-icons icon-sm">how_to_vote</i>点击查看</a></p>
													<p>使用方式：<a class="copy-text btn-dl" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["v2ray"];?>
"><i class="material-icons icon-sm">how_to_vote</i>拷贝链接</a></p>
												<hr/>
												<p><span class="icon icon-lg text-white">filter_5</span> <a class="btn-dl" href="https://rink.hockeyapp.net/recruit/2113783c503645abb0a5ec6317e1a169"><i class="material-icons">save_alt</i> 下载</a> Surfboard - [ SS ]：</p>
													<p>教程文档：<a class="btn-dl" href="/doc/#/Android/Surfboard"><i class="material-icons icon-sm">how_to_vote</i>点击查看</a></p>
													<p>使用方式：<a class="copy-text btn-dl" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["surfboard"];?>
"><i class="material-icons icon-sm">how_to_vote</i>拷贝托管</a>.<a class="btn-dl" href="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["surfboard"];?>
"><i class="material-icons icon-sm">how_to_vote</i>配置下载</a></p>
												<hr/>
												<p><span class="icon icon-lg text-white">filter_6</span> <a class="btn-dl" href="https://play.google.com/store/apps/details?id=fun.kitsunebi.kitsunebi4android&hl=zh"><i class="material-icons">save_alt</i> 下载</a> Kitsunebi - [ SS/VMess ]：</p>
													<p>教程文档：<a class="btn-dl" href="/doc/#/Android/Kitsunebi"><i class="material-icons icon-sm">how_to_vote</i>点击查看</a></p>
													<p>使用方式：<a class="copy-text btn-dl" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["kitsunebi"];?>
"><i class="material-icons icon-sm">how_to_vote</i>SS + V2 混合订阅</a></p>
											</div>
										</div>

									</div>
								</div>

                            </div>

                        </div>
                    </div>
                  
                </div>

            </div>
            <?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </section>
    </div>
</main>


<?php $_smarty_tpl->_subTemplateRender('file:user/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/shake.js@1.2.2/shake.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

    function DateParse(str_date) {
        var str_date_splited = str_date.split(/[^0-9]/);
        return new Date(str_date_splited[0], str_date_splited[1] - 1, str_date_splited[2], str_date_splited[3], str_date_splited[4], str_date_splited[5]);
    }

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

    $(function(){
	    new Clipboard('.copy-text');
    });

    $(".copy-text").click(function () {
        $("#result").modal();
        $$.getElementById('msg').innerHTML = '已复制，请您继续接下来的操作';
    });

    function AddSub(url,jumpurl="") {
	    let tmp = window.btoa(url);
	    window.location.href = jumpurl + tmp;
    }

    function Copyconfig(url,id,jumpurl="") {
        $.ajax({
            url: url,
            type: 'get',
            async: false,
            success: function(res) {
                if(res) {
                    $("#result").modal();
                    $("#msg").html("获取成功");
                    $(id).data('data', res);
		    		console.log(res);
                } else {
                    $("#result").modal();
                   $("#msg").html("获取失败，请稍后再试");
               }
            }
        });
        const clipboard = new Clipboard('.copy-config', {
            text: function() {
                return $(id).data('data');
            }
        });
        clipboard.on('success', function(e) {
				    $("#result").modal();
				    if (jumpurl != "") {
					    $("#msg").html("复制成功，即将跳转到 APP");
					    window.setTimeout(function () {
						    window.location.href = jumpurl;
					    }, 1000);

				    } else {
					    $("#msg").html("复制成功");
				    }
			    }
        );
        clipboard.on("error",function(e){
		    console.error('Action:', e.action);
		    console.error('Trigger:', e.trigger);
		    console.error('Text:', e.text);
			}
	    );
    }

<?php if ($_smarty_tpl->tpl_vars['user']->value->transfer_enable-($_smarty_tpl->tpl_vars['user']->value->u+$_smarty_tpl->tpl_vars['user']->value->d) == 0) {?>
    window.onload = function () {
        $("#result").modal();
        $$.getElementById('msg').innerHTML = '您的流量已经用完或账户已经过期了，如需继续使用，请进入商店选购新的套餐~';
    };
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['geetest_html']->value == null) {?>

    var checkedmsgGE = '<p><a class="btn btn-brand disabled btn-flat waves-attach" href="#"><span class="icon">check</span>&nbsp;已签到</a></p>';
    window.onload = function () {
        var myShakeEvent = new Shake({
            threshold: 15
        });
        myShakeEvent.start();
        window.addEventListener('shake', shakeEventDidOccur, false);
        function shakeEventDidOccur() {
            if ("vibrate" in navigator) {
                navigator.vibrate(500);
            }
            $.ajax({
                type: "POST",
                url: "/user/checkin",
                dataType: "json",<?php if ($_smarty_tpl->tpl_vars['recaptcha_sitekey']->value != null) {?>
                data: {
                    recaptcha: grecaptcha.getResponse()
                },<?php }?>
                success: (data) => {
                    if (data.ret) {

                        $$.getElementById('checkin-msg').innerHTML = data.msg;
                        $$.getElementById('checkin-btn').innerHTML = checkedmsgGE;
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        $$.getElementById('remain').innerHTML = data.trafficInfo['unUsedTraffic'];
                        $('.bar.remain.color').css('width', (data.unflowtraffic - (<?php echo $_smarty_tpl->tpl_vars['user']->value->u;?>
+<?php echo $_smarty_tpl->tpl_vars['user']->value->d;?>
)) / data.unflowtraffic * 100 + '%');
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `发生错误：${
                            jqXHR.status
                            }`;
                }
            });
        }
    };

    $(document).ready(function () {
        $("#checkin").click(function () {
            $.ajax({
                type: "POST",
                url: "/user/checkin",
                dataType: "json",<?php if ($_smarty_tpl->tpl_vars['recaptcha_sitekey']->value != null) {?>
                data: {
                    recaptcha: grecaptcha.getResponse()
                },<?php }?>
                success: (data) => {
                    if (data.ret) {
                        $$.getElementById('checkin-msg').innerHTML = data.msg;
                        $$.getElementById('checkin-btn').innerHTML = checkedmsgGE;
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        $$.getElementById('remain').innerHTML = data.trafficInfo['unUsedTraffic'];
                        $('.bar.remain.color').css('width', (data.unflowtraffic - (<?php echo $_smarty_tpl->tpl_vars['user']->value->u;?>
+<?php echo $_smarty_tpl->tpl_vars['user']->value->d;?>
)) / data.unflowtraffic * 100 + '%');
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `发生错误：${
                            jqXHR.status
                            }`;
                }
            })
        })
    })

<?php } else { ?>

    window.onload = function () {
        var myShakeEvent = new Shake({
            threshold: 15
        });
        myShakeEvent.start();
        window.addEventListener('shake', shakeEventDidOccur, false);
        function shakeEventDidOccur() {
            if ("vibrate" in navigator) {
                navigator.vibrate(500);
            }
            c.show();
        }
    };

    var handlerPopup = function (captchaObj) {
        c = captchaObj;
        captchaObj.onSuccess(function () {
            var validate = captchaObj.getValidate();
            $.ajax({
                url: "/user/checkin", // 进行二次验证
                type: "post",
                dataType: "json",
                data: {
                    // 二次验证所需的三个值
                    geetest_challenge: validate.geetest_challenge,
                    geetest_validate: validate.geetest_validate,
                    geetest_seccode: validate.geetest_seccode
                },
                success: (data) => {
                    if (data.ret) {
                        $$.getElementById('checkin-msg').innerHTML = data.msg;
                        $$.getElementById('checkin-btn').innerHTML = checkedmsgGE;
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        $$.getElementById('remain').innerHTML = data.trafficInfo['unUsedTraffic'];
                        $('.bar.remain.color').css('width', (data.unflowtraffic - (<?php echo $_smarty_tpl->tpl_vars['user']->value->u;?>
+<?php echo $_smarty_tpl->tpl_vars['user']->value->d;?>
)) / data.unflowtraffic * 100 + '%');
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `发生错误：${
                            jqXHR.status
                            }`;
                }
            });
        });
        // 弹出式需要绑定触发验证码弹出按钮
        //captchaObj.bindOn("#checkin")
        // 将验证码加到id为captcha的元素里
        captchaObj.appendTo("#popup-captcha");
        // 更多接口参考：http://www.geetest.com/install/sections/idx-client-sdk.html
    };

    initGeetest({
        gt: "<?php echo $_smarty_tpl->tpl_vars['geetest_html']->value->gt;?>
",
        challenge: "<?php echo $_smarty_tpl->tpl_vars['geetest_html']->value->challenge;?>
",
        product: "popup", // 产品形式，包括：float，embed，popup。注意只对PC版验证码有效
        offline: <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value->success) {?>0<?php } else { ?>1<?php }?> // 表示用户后台检测极验服务器是否宕机，与SDK配合，用户一般不需要关注
    }, handlerPopup);

<?php }?>

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#delSubCache").click(function () {
            $.ajax({
                type: "get",
                url: "user/cleanSubCache",
                success: (data) => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
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

<?php if ($_smarty_tpl->tpl_vars['recaptcha_sitekey']->value != null) {?>
    <?php echo '<script'; ?>
 src="https://recaptcha.net/recaptcha/api.js" async defer><?php echo '</script'; ?>
>
<?php }?>

<?php }
}
