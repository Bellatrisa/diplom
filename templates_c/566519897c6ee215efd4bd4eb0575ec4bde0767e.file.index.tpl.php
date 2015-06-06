<?php /* Smarty version Smarty-3.1.21, created on 2015-06-06 21:05:03
         compiled from "templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:278295573364f895f24-26802929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '566519897c6ee215efd4bd4eb0575ec4bde0767e' => 
    array (
      0 => 'templates\\index.tpl',
      1 => 1433613682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '278295573364f895f24-26802929',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'create' => 0,
    'createRID' => 0,
    'nameRID' => 0,
    'surname' => 0,
    'name' => 0,
    'patronymic' => 0,
    'post' => 0,
    'organization' => 0,
    'type' => 0,
    'delo' => 0,
    'statusRID' => 0,
    'foo' => 0,
    'date' => 0,
    'serchbtn' => 0,
    'sort' => 0,
    'i' => 0,
    'sortbtn' => 0,
    'tHeader' => 0,
    'rids' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5573364f959453_66889650',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5573364f959453_66889650')) {function content_5573364f959453_66889650($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'D:\\OpenServer\\domains\\diplom\\libs\\plugins\\modifier.capitalize.php';
?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="row">
	<div class="col-md-9">
		<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
	</div>
	<button data-toggle="modal" data-target="#myModal" class="btn btn-danger col-md-3"><?php echo $_smarty_tpl->tpl_vars['create']->value;?>
</button>
	<!-- Модальное окно -->
	<div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['createRID']->value);?>
</h4>
			</div>
			<form href="index.php?insert=true" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data" id="data" method="post">
				<div class="modal-body">
					<div class="form-group">
						<input class="form-control" type="text" required name="inputNameRID" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['nameRID']->value;?>
">
						<div class="help-block with-errors"></div>
					</div>
					<br>
					<div class="form-group">
						<input class="form-control" type="text" required name="inputSurname" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['surname']->value;?>
">
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-group">
						<input class="form-control" type="text" required name="inputName" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-group">
						<input class="form-control" type="text" required name="inputpatronymic" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['patronymic']->value;?>
">
						<div class="help-block with-errors"></div>
					</div>
					<br>
					<div class="form-group">
						<input class="form-control" type="text" required name="inputpost" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['post']->value;?>
">
						<div class="help-block with-errors"></div>
					</div>
					<br>
					<div class="form-group">
						<input class="form-control" type="text" required name="inputorganization" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['organization']->value;?>
">
						<div class="help-block with-errors"></div>
					</div>
					<br>
					<div class="form-group">
						<input class="form-control" type="text" required name="inputtype" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
						<div class="help-block with-errors"></div>
					</div>
					<br>
					<div class="form-group">
						<input class="form-control" type="text" required name="inputdelo" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['delo']->value;?>
">
						<div class="help-block with-errors"></div>
					</div>
					<br>
					<div class="form-group">
						<div class="input-group">
							<label for="inputstatus" class="control-label input-group-addon">статус РИД</label>
							<select class="form-control" required id="inputstatus" name="inputstatus">
								<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['statusRID']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
</option>
								<?php } ?>
							</select>
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<br>
					<div class="form-group">
						<div class="input-group">
							<label for="inputdate" class="input-group-addon">Дата создания РИД</label>
							<input class="form-control" type="date" required name="inputdate" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
">
						</div>
						<div class="help-block with-errors"></div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
					<button type="submit" class="btn btn-danger" ><?php echo $_smarty_tpl->tpl_vars['createRID']->value;?>
</button>
				</div>
			</form>
		</div>
		</div>
	</div>
	<!-- Модальное окно -->

</div>
<!--<hr>
<div class="row">
	<form class="form-inline" role="form" action="">
	<div class="input-group col-md-3">
		<input type="text" class="form-control" id="serch" placeholder="поиск">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['serchbtn']->value;?>
</button>
		</span>
	</div>
	<div class="input-group col-md-4">
		<select class="form-control">
			<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sort']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['foo']->key;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</option>
			<?php } ?>
		</select>
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['sortbtn']->value;?>
</button>
		</span>
	</div>
	</form>
</div>-->
<hr>
<div class="row">
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
 $_from = $_smarty_tpl->tpl_vars['rids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['foo']->key;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['foo']->value['number'];?>
</td>
				<td><a href="rid.php?id_rid=<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
</a></td>
				<td><?php echo $_smarty_tpl->tpl_vars['foo']->value['authorn'];?>
 <?php echo $_smarty_tpl->tpl_vars['foo']->value['authors'];?>
 <?php echo $_smarty_tpl->tpl_vars['foo']->value['authorp'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['foo']->value['organization'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['foo']->value['type'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['foo']->value['status'];?>
</td>
				<td class="date"><?php echo $_smarty_tpl->tpl_vars['foo']->value['date_create'];?>
</td>
				<td class="date"><?php echo $_smarty_tpl->tpl_vars['foo']->value['date_last_change'];?>
</td>
			</tr>
			<?php } ?>
	</table>
</div>
<hr>
<?php echo '<script'; ?>
>
	$('#data').validator();
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
