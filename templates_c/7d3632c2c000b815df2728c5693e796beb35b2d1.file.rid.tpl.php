<?php /* Smarty version Smarty-3.1.21, created on 2015-05-23 12:22:57
         compiled from "templates\rid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1915655603397791c79-87729943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d3632c2c000b815df2728c5693e796beb35b2d1' => 
    array (
      0 => 'templates\\rid.tpl',
      1 => 1432369376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1915655603397791c79-87729943',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5560339794b356_71173130',
  'variables' => 
  array (
    'title' => 0,
    'titleStatus' => 0,
    'status' => 0,
    'foo' => 0,
    'moreStatus' => 0,
    'titleInfo' => 0,
    'createInfoRID' => 0,
    'rid' => 0,
    'titleDoc' => 0,
    'createDoc' => 0,
    'typeDoc' => 0,
    'statusDoc' => 0,
    'idRID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5560339794b356_71173130')) {function content_5560339794b356_71173130($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'D:\\OpenServer\\domains\\diplomGul\\diplom\\libs\\plugins\\modifier.capitalize.php';
?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="row">
	<div class="col-md-9">
		<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-md-12">
		<h3><?php echo $_smarty_tpl->tpl_vars['titleStatus']->value;?>
</h3>
		<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['status']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['foo']->key;
?>
			<?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
 -&gt; 
		<?php } ?>
		В архиве.
		<br>
		<a href="./status.php"><?php echo $_smarty_tpl->tpl_vars['moreStatus']->value;?>
</a>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-md-6">
		<h3><?php echo $_smarty_tpl->tpl_vars['titleInfo']->value;?>
</h3>
		<!-- окно для добавления инфо о РИД -->
		<button type="submit" class="btn btn-danger col-md-6"><?php echo $_smarty_tpl->tpl_vars['createInfoRID']->value;?>
</button>



		<!-- вывод из бд -->
		<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rid']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
		<div class="row col-md-12"><strong>Дело №</strong> <?php echo $_smarty_tpl->tpl_vars['foo']->value['number_case'];?>
</div>
		<div class="row col-md-12"><strong>Описание</strong> <a href="<?php echo $_smarty_tpl->tpl_vars['foo']->value['description'];?>
">скачать</a></div>
		<div class="row col-md-12"><strong>Реферат</strong> <a href="<?php echo $_smarty_tpl->tpl_vars['foo']->value['referat'];?>
">скачать</a></div>
		<div class="row col-md-12"><strong>Формула</strong> <a href="<?php echo $_smarty_tpl->tpl_vars['foo']->value['formula'];?>
">скачать</a></div>
		<div class="row col-md-12"><strong>Рисунки</strong> <a href="<?php echo $_smarty_tpl->tpl_vars['foo']->value['image'];?>
">скачать</a></div>
		<?php } ?>
	</div>
	<div class="col-md-6">
		<!-- окно для добавления документов -->
		<h3><?php echo $_smarty_tpl->tpl_vars['titleDoc']->value;?>
</h3>

		<button class="btn btn-danger col-md-6" data-toggle="modal" data-target="#myModal"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['createDoc']->value);?>
</button>

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['createDoc']->value);?>
</h4>
				</div>
				<form href="rid.php?insert=true" class="form-horizontal" enctype="multipart/form-data" role="form" id="data" method="post">
					<div class="modal-body">
							<div class="form-group">
								<div class="input-group">
									<label for="inputTypeDoc" class="control-label input-group-addon">тип документа</label>
									<select class="form-control" id="inputTypeDoc" name="inputTypeDoc">
										<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['typeDoc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
</option>
										<?php } ?>
									</select>
								</div>
								<br>
								<div class="input-group">
									<label for="inputStatusDoc" class="control-label input-group-addon">статус документа</label>
									<select class="form-control" id="inputStatusDoc" name="inputStatusDoc">
										<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['statusDoc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['statusDoc']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
</option>
										<?php } ?>
									</select>
								</div>
								<br>
								<div class="input-group">
									<label for="inputdate" class="input-group-addon">Дата подписи</label>
									<input class="form-control" type="date" name="inputdate" value="" placeholder="">
								</div>
								<br>
								<input type="file" id="file" name="file" class="btn btn-default col-md-12">
								<input type="text" name="id_rid" value="<?php echo $_smarty_tpl->tpl_vars['idRID']->value;?>
" style="display: none;" disabled>
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
						<button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Сохранить изменения</button>
					</div>
				</form>
			</div>
			</div>
		</div>

		<!-- вывод документов из бд -->
	</div>
</div>
	
<hr>
<?php echo '<script'; ?>
><?php echo $_smarty_tpl->getSubTemplate ("../scripts/uploadFile.js", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
