<?php /* Smarty version Smarty-3.1.21, created on 2015-05-21 11:46:18
         compiled from "C:\xampp\htdocs\diplom\scripts\uploadFile.js" */ ?>
<?php /*%%SmartyHeaderCode:21314555da96a9905c0-51033067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5cce2a3f0c80fbda0e2c8b5e20b66f8f1b7ded5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\diplom\\scripts\\uploadFile.js',
      1 => 1431824587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21314555da96a9905c0-51033067',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_555da96a9a3e47_13207745',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555da96a9a3e47_13207745')) {function content_555da96a9a3e47_13207745($_smarty_tpl) {?>jQuery(document).ready(function($){

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
