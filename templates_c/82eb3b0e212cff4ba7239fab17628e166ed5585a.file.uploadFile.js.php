<?php /* Smarty version Smarty-3.1.21, created on 2015-05-27 15:57:01
         compiled from "D:\OpenServer\domains\diplomGul\diplom\scripts\uploadFile.js" */ ?>
<?php /*%%SmartyHeaderCode:9341556033979668e1-77694338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82eb3b0e212cff4ba7239fab17628e166ed5585a' => 
    array (
      0 => 'D:\\OpenServer\\domains\\diplomGul\\diplom\\scripts\\uploadFile.js',
      1 => 1432727819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9341556033979668e1-77694338',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5560339797a165_78269699',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5560339797a165_78269699')) {function content_5560339797a165_78269699($_smarty_tpl) {?>jQuery(document).ready(function($){

	$("form#data").submit(function(){
		var formData = new FormData($(this)[0]);
		$.ajax({
			url: "./uploadFile.php",
			type: 'POST',
			data: formData,
			async: false,
			success: function (data) {
				alert(data);
				console.log(data);
			},
			cache: false,
			contentType: false,
			processData: false
		});

		return false;
	});
});<?php }} ?>
