<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-17 19:08:00
  from '/www/wwwroot/www.piyrw.com/resources/views/material/indexold.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4a7410ab7f80_24736033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8f6d594794b8139935024768d1474d8e7b44dda' => 
    array (
      0 => '/www/wwwroot/www.piyrw.com/resources/views/material/indexold.tpl',
      1 => 1581932049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4a7410ab7f80_24736033 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<!--
    Dimension by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <meta charset="utf-8"/>
    <title><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <?php if ($_smarty_tpl->tpl_vars['config']->value['appName'] == '跑路') {?>
        <?php echo '<script'; ?>
>window.location.href = '<?php echo $_smarty_tpl->tpl_vars['config']->value["baseUrl"];?>
/paolu.html';<?php echo '</script'; ?>
>
    <?php }?>
    <link rel="shortcut icon" href="/favicon.ico"/>
    <link rel="bookmark" href="/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="/assets/css/main.css"/>
    <noscript>
        <link rel="stylesheet" href="/assets/css/noscript.css"/>
    </noscript>
    <link href="https://cdn.jsdelivr.net/npm/nprogress@0.2.0/nprogress.min.css" rel="stylesheet"/>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/nprogress@0.2.0/nprogress.min.js"><?php echo '</script'; ?>
>
</head>

<body>

<div id="wrapper">
    <!--首页开始-->
    <header id="header">
        <div class="logo">
            <span class="icon fa-rocket"></span>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->isLogin) {?>
            <div class="content">
                <div class="inner">
                    <p>用户：<code><?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
</code>
                        等级：
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->class != 0) {?>
                            <code>VIP<?php echo $_smarty_tpl->tpl_vars['user']->value->class;?>
</code>
                        <?php } else { ?>
                            <code>免费</code>
                        <?php }?>
                        过期时间：
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->class_expire != "1989-06-04 00:05:00") {?>
                            <code><?php echo $_smarty_tpl->tpl_vars['user']->value->class_expire;?>
</code>
                        <?php } else { ?>
                            <code>不过期</code>
                        <?php }?>
                    </p>
                    <p>总流量：<code><?php echo $_smarty_tpl->tpl_vars['user']->value->enableTraffic();?>
</code>
                        已用流量：<code><?php echo $_smarty_tpl->tpl_vars['user']->value->usedTraffic();?>
</code>
                        剩余流量：<code><?php echo $_smarty_tpl->tpl_vars['user']->value->unusedTraffic();?>
</code>
                    </p>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="#1">简介</a></li>
                    <li><a href="/user">用户中心</a></li>
                    <li><a href="/user/logout">退出登录</a></li>
                </ul>
            </nav>
        <?php } else { ?>
            <div class="content">
                <div class="inner">
                    <h1><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</h1>
                    <!--
                    如果想自定义文本请删除下面这段script代码,格式为
                    <p>自定义文本</p>
                    -->
                    <p>够了，我无法忍受你的行为，现在你将成为我们中的一员</p>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="#1">简介</a></li>
                    <li><a href="/auth/login">登录</a></li>
                    <li><a href="/auth/register">注册</a></li>
                </ul>
            </nav>
        <?php }?>

    </header>
    <!--首页结束-->
    <div id="main">
        <!--标签1开始-->
        <article id="1">
            <h2 class="major">简介</h2>
            <p>「ホワイトアルバムの季節」が、また、やってきた。</p>
        </article>
        <!--
        简介修改示例:
        <p>123</p>
        一个 <p>123</p> 为一行，请不要删除 </article>
        -->
        <!--标签4开始-->
        <article id="4">
            <h2 class="major">联系我们</h2>
            <ul class="icons">
                <p>此处填写联系方式</p>
                <li>
                    <a target="_blank" href="#" class="icon fa-facebook">
                        <!-- 请在 fontawesome.com 寻找替换图标 href 替换链接 -->
                        <span class="label">Facebook</span>
                    </a>
                </li>
            </ul>
        </article>
        <article id="login">
            <h2 class="major">登录</h2>
            <form method="post" action="javascript:void(0);">
                <div class="field half first">
                    <label for="email2">邮箱</label>
                    <input type="text" name="Email" id="email2"/>
                </div>
                <div class="field half">
                    <label for="passwd">密码</label>
                    <input type="password" name="Password" id="passwd"/>
                </div>

                <ul class="actions">
                    <li><input id="login" type="submit" value="登录" class="special"/></li>
                    <li><input type="reset" value="清空"/></li>
                </ul>
            </form>

            <div class="field half">
                <input value="week" id="remember_me" name="remember_me" type="checkbox" checked>
                <label for="remember_me">记住我</label>
            </div>

            <br>

            <div id="result" role="dialog">
                <p color class="h5 margin-top-sm text-black-hint" id="msg"></p>
            </div>
        </article>
        <!--全部标签结束-->

    </div>
    <!-- 版权底部 -->
    <footer id="footer">
        <p class="copyright">&copy;<?php echo date("Y");?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</p>
    </footer>
    <!-- 版权结束 -->
</div>
<!-- BG -->
<div id="bg"></div>
<!-- Scripts -->
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/jquery@1.11.3"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/gh/ajlkn/skel@3.0.1/dist/skel.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/main.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    try {
        if (window.console && window.console.log) {
            console.log("%c<?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
", " text-shadow: 0 1px 0 #ccc,0 2px 0 #c9c9c9,0 3px 0 #bbb,0 4px 0 #b9b9b9,0 5px 0 #aaa,0 6px 1px rgba(0,0,0,.1),0 0 5px rgba(0,0,0,.1),0 1px 3px rgba(0,0,0,.3),0 3px 5px rgba(0,0,0,.2),0 5px 10px rgba(0,0,0,.25),0 10px 10px rgba(0,0,0,.2),0 20px 20px rgba(0,0,0,.15);font-size:5em");
            console.log("%chttps://github.com/Anankke/SSPanel-Uim", "background: rgba(252,234,187,1);background: -moz-linear-gradient(left, rgba(252,234,187,1) 0%, rgba(175,250,77,1) 12%, rgba(0,247,49,1) 28%, rgba(0,210,247,1) 39%,rgba(0,189,247,1) 51%, rgba(133,108,217,1) 64%, rgba(177,0,247,1) 78%, rgba(247,0,189,1) 87%, rgba(245,22,52,1) 100%);background: -webkit-gradient(left top, right top, color-stop(0%, rgba(252,234,187,1)), color-stop(12%, rgba(175,250,77,1)), color-stop(28%, rgba(0,247,49,1)), color-stop(39%, rgba(0,210,247,1)), color-stop(51%, rgba(0,189,247,1)), color-stop(64%, rgba(133,108,217,1)), color-stop(78%, rgba(177,0,247,1)), color-stop(87%, rgba(247,0,189,1)), color-stop(100%, rgba(245,22,52,1)));background: -webkit-linear-gradient(left, rgba(252,234,187,1) 0%, rgba(175,250,77,1) 12%, rgba(0,247,49,1) 28%, rgba(0,210,247,1) 39%, rgba(0,189,247,1) 51%, rgba(133,108,217,1) 64%, rgba(177,0,247,1) 78%, rgba(247,0,189,1) 87%, rgba(245,22,52,1) 100%);background: -o-linear-gradient(left, rgba(252,234,187,1) 0%, rgba(175,250,77,1) 12%, rgba(0,247,49,1) 28%, rgba(0,210,247,1) 39%, rgba(0,189,247,1) 51%, rgba(133,108,217,1) 64%, rgba(177,0,247,1) 78%, rgba(247,0,189,1) 87%, rgba(245,22,52,1) 100%);background: -ms-linear-gradient(left, rgba(252,234,187,1) 0%, rgba(175,250,77,1) 12%, rgba(0,247,49,1) 28%, rgba(0,210,247,1) 39%, rgba(0,189,247,1) 51%, rgba(133,108,217,1) 64%, rgba(177,0,247,1) 78%, rgba(247,0,189,1) 87%, rgba(245,22,52,1) 100%);background: linear-gradient(to right, rgba(252,234,187,1) 0%, rgba(175,250,77,1) 12%, rgba(0,247,49,1) 28%, rgba(0,210,247,1) 39%, rgba(0,189,247,1) 51%, rgba(133,108,217,1) 64%, rgba(177,0,247,1) 78%, rgba(247,0,189,1) 87%, rgba(245,22,52,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fceabb', endColorstr='#f51634', GradientType=1 );font-size:3em");
        }
    } catch (e) {
    }
<?php echo '</script'; ?>
>

<!-- 進度條 -->
<?php echo '<script'; ?>
>
    
    $(function () {
        $(window).load(function () {
            NProgress.done();
        });
        NProgress.set(0.0);
        NProgress.configure({showSpinner: false});
        NProgress.configure({minimum: 0.4});
        NProgress.configure({easing: 'ease', speed: 1200});
        NProgress.configure({trickleSpeed: 200});
        NProgress.configure({trickleRate: 0.2, trickleSpeed: 1200});
        NProgress.inc();
        $(window).ready(function () {
            NProgress.start();
        });
    });
    

    /*window.addEventListener('load', () => {
        fetch('https://api.lwl12.com/hitokoto/v1?encode=realjson', {
            method: 'GET',
        }).then((response) => {
            return response.json();
        }).then((r) => {
            insertHitokoto(r);
        })
    });

    function insertHitokoto(data) {
        let hitokoto = document.getElementById('lwlhitokoto');
        if (data.author || data.source) {
            hitokoto.innerHTML = `${data.text} —— ${data.author} ${data.source}`;
        } else {
            hitokoto.innerHTML = `${data.text}`;
        }
    }*/
<?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
