<?php /* Smarty version Smarty-3.1.21, created on 2015-06-06 21:11:30
         compiled from "templates\rid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61075573367072a357-35528439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fa769b3c6932e2f302740d6e536f07fbf88c077' => 
    array (
      0 => 'templates\\rid.tpl',
      1 => 1433614289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61075573367072a357-35528439',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5573367084b499_56380013',
  'variables' => 
  array (
    'title' => 0,
    'titleStatus' => 0,
    'status' => 0,
    'foo' => 0,
    'moreStatus' => 0,
    'titleInfo' => 0,
    'rid' => 0,
    'createInfoRID' => 0,
    'typeInfo' => 0,
    'close' => 0,
    'idRID' => 0,
    'save' => 0,
    'tHeaderInfo' => 0,
    'i' => 0,
    'download' => 0,
    'titleDoc' => 0,
    'createDoc' => 0,
    'typeDoc' => 0,
    'statusDoc' => 0,
    'tHeader' => 0,
    'Doc' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5573367084b499_56380013')) {function content_5573367084b499_56380013($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'D:\\OpenServer\\domains\\diplom\\libs\\plugins\\modifier.capitalize.php';
?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="row">
	<div class="col-md-9">
		<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
	</div>
	<a href="./" class="btn btn-default col-md-3" role="button">На главную</a>
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
		<!-- окно для добавления инфо о РИД -->
		<h3><?php echo $_smarty_tpl->tpl_vars['titleInfo']->value;?>
 № <strong><?php echo $_smarty_tpl->tpl_vars['rid']->value[0]['number_case'];?>
</strong></h3>
		<button type="submit" class="btn btn-danger col-md-6" data-toggle="modal" data-target="#myModalInfo"><?php echo $_smarty_tpl->tpl_vars['createInfoRID']->value;?>
</button>

		<div class="modal fade" id="myModalInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['createInfoRID']->value;?>
</h4>
				</div>
				<form action="uploadFile.php?type=info" class="form-horizontal" enctype="multipart/form-data" role="form" id="dataInfo" method="post">
					<div class="modal-body">
							<div class="form-group">
								<select class="form-control" id="inputTypeInfo" name="inputTypeInfo">
									<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['typeInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['foo']->key;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['col'];?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
</option>
									<?php } ?>
								</select>
								<br>
								<div class="form-group col-md-12">
									<input type="file" id="file" name="file" class="btn btn-default" required>
									<div class="help-block with-errors"></div>
								</div>
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['close']->value;?>
</button>
						<button type="submit" class="btn btn-danger" name="id_rid" value="<?php echo $_smarty_tpl->tpl_vars['idRID']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['save']->value;?>
</button>
					</div>
				</form>
			</div>
			</div> 
		</div>
		<!-- вывод из бд -->
		<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rid']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
		<table class="table table-hover">
			<thead>
				<tr>
				<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tHeaderInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['foo']->key;
?>
					<th class="input-group col-md-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</th>
				<?php } ?>
				</tr>
			</thead>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['typeInfo']->value[0]['name'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['rid']->value[0]['description']!='') {?><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['rid']->value[0]['description'];?>
"><?php echo $_smarty_tpl->tpl_vars['download']->value;?>
</a><?php }?></td>
				</tr>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['typeInfo']->value[1]['name'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['rid']->value[0]['referat']!='') {?><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['rid']->value[0]['referat'];?>
"><?php echo $_smarty_tpl->tpl_vars['download']->value;?>
</a><?php }?></td>
				</tr>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['typeInfo']->value[2]['name'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['rid']->value[0]['formula']!='') {?><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['rid']->value[0]['formula'];?>
"><?php echo $_smarty_tpl->tpl_vars['download']->value;?>
</a><?php }?></td>
				</tr>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['typeInfo']->value[3]['name'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['rid']->value[0]['img']!='') {?><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['rid']->value[0]['img'];?>
"><?php echo $_smarty_tpl->tpl_vars['download']->value;?>
</a><?php }?></td>
				</tr>
		</table>
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
				<form action="uploadFile.php?type=doc" class="form-horizontal" enctype="multipart/form-data" role="form" id="data" method="post">
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
											<option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
</option>
										<?php } ?>
									</select>
								</div>
								<br>
								<div class="form-group col-md-12">
									<div class="input-group">
										<label for="inputdate" class="input-group-addon">Дата подписи</label>
										<input class="form-control" type="date" name="inputdate" value="" required>
										<div class="help-block with-errors"></div>
									</div>
									<div class="help-block with-errors"></div>
								</div>
								<br>
								<div class="input-group col-md-12">
									<input type="file" id="file" name="file" class="btn btn-default" required>
									<div class="help-block with-errors"></div>
								</div>
								
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['close']->value;?>
</button>
						<button type="submit" class="btn btn-danger" name="id_rid" value="<?php echo $_smarty_tpl->tpl_vars['idRID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['save']->value;?>
</button>
					</div>
				</form>
			</div>
			</div>
		</div>
		<div class="row"></div>
		<!-- вывод документов из бд -->
		<table class="table table-hover">
			<thead>
				<tr>
				<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tHeader']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['foo']->key;
?>
					<th class="input-group col-md-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</th>
				<?php } ?>
				</tr>
			</thead>
				<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Doc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['foo']->key;
?>
				<tr>
					<td><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['foo']->value['file'];?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value['filename'];?>
</a></td>
					<td><?php echo $_smarty_tpl->tpl_vars['foo']->value['type'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['foo']->value['date'];?>
</td>
				</tr>
				<?php } ?>
		</table>
	</div>
</div>
	
<hr>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
