<?php /* Smarty version Smarty-3.1.21, created on 2015-05-21 11:46:50
         compiled from "templates\status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20301555da98a0e8ba3-46457909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cba779f7838cfe1540c282d2e637f85203d48a7b' => 
    array (
      0 => 'templates\\status.tpl',
      1 => 1432104808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20301555da98a0e8ba3-46457909',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'tHeader' => 0,
    'foo' => 0,
    'i' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_555da98a1f6469_36418039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555da98a1f6469_36418039')) {function content_555da98a1f6469_36418039($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
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
 $_from = $_smarty_tpl->tpl_vars['status']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['foo']->value['description'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['foo']->value['documents'];?>
</td>
			</tr>
			<?php } ?>
	</table>
</div>
<hr>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
