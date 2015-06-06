<?php /* Smarty version Smarty-3.1.21, created on 2015-06-06 21:05:03
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80105573364faef8b6-90872169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84a05e3b23cce34e0b9d59c21bf9be43e2c3255d' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1433613682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80105573364faef8b6-90872169',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5573364fafb436_02007496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5573364fafb436_02007496')) {function content_5573364fafb436_02007496($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="cp-1251">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<?php echo $_smarty_tpl->getSubTemplate ("scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("styles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body><?php }} ?>
