<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-11 23:54:26
  from '/www/wwwroot/hi.mars333.com/resources/views/material/admin/detect/ban.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f5b9db285e240_32640068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d90dabec1682bdf7f03ef2df66dc9931325753c' => 
    array (
      0 => '/www/wwwroot/hi.mars333.com/resources/views/material/admin/detect/ban.tpl',
      1 => 1581932049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/main.tpl' => 1,
    'file:table/checkbox.tpl' => 1,
    'file:table/table.tpl' => 1,
    'file:admin/footer.tpl' => 1,
    'file:table/js_1.tpl' => 1,
    'file:table/js_2.tpl' => 1,
  ),
),false)) {
function content_5f5b9db285e240_32640068 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender('file:admin/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main class="content">
	<div class="content-header ui-content-header">
		<div class="container">
			<h1 class="content-heading">审计封禁记录</h1>
		</div>
	</div>
	<div class="container">
		<div class="col-lg-12 col-md-12">
			<section class="content-inner margin-top-no">

				<div class="card">
					<div class="card-main">
						<div class="card-inner">
							<p>系统中所有审计封禁记录。</p>
							<p>显示表项:
								<?php $_smarty_tpl->_subTemplateRender('file:table/checkbox.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
							</p>
						</div>
					</div>
				</div>

				<div class="table-responsive">
					<?php $_smarty_tpl->_subTemplateRender('file:table/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				</div>

		</div>
	</div>
</main>


<?php $_smarty_tpl->_subTemplateRender('file:admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
	<?php $_smarty_tpl->_subTemplateRender('file:table/js_1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	$(document).ready(function(){
		<?php $_smarty_tpl->_subTemplateRender('file:table/js_2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	});
<?php echo '</script'; ?>
>
<?php }
}
