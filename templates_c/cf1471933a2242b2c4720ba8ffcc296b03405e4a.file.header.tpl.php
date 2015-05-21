<?php /* Smarty version Smarty-3.1.21, created on 2015-05-21 11:38:43
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11737555cd530c80273-04772900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf1471933a2242b2c4720ba8ffcc296b03405e4a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1432201118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11737555cd530c80273-04772900',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_555cd530c93b05_47178529',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555cd530c93b05_47178529')) {function content_555cd530c93b05_47178529($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="cp-1251">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<?php echo $_smarty_tpl->getSubTemplate ("scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("styles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body><?php }} ?>
