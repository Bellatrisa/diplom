<?php /* Smarty version Smarty-3.1.21, created on 2015-05-23 12:00:06
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1200955603386ab69e6-22019414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f290454e4b4ed21f20eb36c61bf94e8d43eda1a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1432367999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1200955603386ab69e6-22019414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55603386ad1f71_69115049',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55603386ad1f71_69115049')) {function content_55603386ad1f71_69115049($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="cp-1251">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<?php echo $_smarty_tpl->getSubTemplate ("scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("styles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body><?php }} ?>
