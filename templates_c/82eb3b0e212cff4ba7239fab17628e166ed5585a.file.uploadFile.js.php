<?php /* Smarty version Smarty-3.1.21, created on 2015-05-23 12:00:23
         compiled from "D:\OpenServer\domains\diplomGul\diplom\scripts\uploadFile.js" */ ?>
<?php /*%%SmartyHeaderCode:9341556033979668e1-77694338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82eb3b0e212cff4ba7239fab17628e166ed5585a' => 
    array (
      0 => 'D:\\OpenServer\\domains\\diplomGul\\diplom\\scripts\\uploadFile.js',
      1 => 1432367999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9341556033979668e1-77694338',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5560339797a165_78269699',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5560339797a165_78269699')) {function content_5560339797a165_78269699($_smarty_tpl) {?>jQuery(document).ready(function($){

	$("form#data").submit(function(){
		alert("sdf");
		var formData = new FormData($(this)[0]);
		$.ajax({
			url: "./uploadFile.php",
			type: 'POST',
			data: formData,
			async: false,
			success: function (data) {
				alert(data)
			},
			cache: false,
			contentType: false,
			processData: false
		});

		return false;
	});
});<?php }} ?>
