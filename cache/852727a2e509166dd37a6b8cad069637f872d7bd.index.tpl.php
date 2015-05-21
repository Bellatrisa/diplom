<?php /*%%SmartyHeaderCode:55135557ac891c58d0-47252745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '852727a2e509166dd37a6b8cad069637f872d7bd' => 
    array (
      0 => 'templates\\index.tpl',
      1 => 1431808838,
      2 => 'file',
    ),
    '0debd65d8a9db561a3ba3fd862046bf4e41cc1db' => 
    array (
      0 => '.\\configs\\test.conf',
      1 => 1431804734,
      2 => 'file',
    ),
    'b43fe032f48c36d2c67a62f6233320614e6d64c0' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1431808919,
      2 => 'file',
    ),
    '9c2a59a7df6b8467ef6ca6cc163636c4f5645107' => 
    array (
      0 => '.\\templates\\scripts.tpl',
      1 => 1431808319,
      2 => 'file',
    ),
    '81198f070142ce8dcb89dd34df8df9894f98fc50' => 
    array (
      0 => '.\\templates\\styles.tpl',
      1 => 1431808328,
      2 => 'file',
    ),
    '71c4faeee111c5307a1cd45729f6b54692815854' => 
    array (
      0 => '.\\templates\\footer.tpl',
      1 => 1431804678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55135557ac891c58d0-47252745',
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5557ad0239a051_25044205',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5557ad0239a051_25044205')) {function content_5557ad0239a051_25044205($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Карточки РИД</title>
	<script src="scripts/jquery.min.js"></script>
<script src="scripts/bootstrap.min.js"></script>
	<link rel="stylesheet" href="styles/bootstrap-theme.min.css">
<link rel="stylesheet" href="styles/bootstrap.min.css">
<link rel="stylesheet" href="styles/castom.css">
</head>
<body>

<div class="row">
	<div class="col-md-9">
		<h1>Карточки РИД</h1>
	</div>
	<button type="submit" class="btn btn-danger col-md-3">Создать новый РИД</button>
</div>
<hr>
<div class="row">
	<form class="form-inline" role="form" action="">
	<div class="input-group col-md-3">
		<input type="text" class="form-control" id="serch" placeholder="поиск">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default">Искать</button>
		</span>
	</div>
	<div class="input-group col-md-4">
		<select class="form-control">
							<option value="0">по названию РИД</option>
							<option value="1">по автору</option>
							<option value="2">по номеру дела</option>
							<option value="3">по статусу</option>
							<option value="4">по дате создания</option>
							<option value="5">по дате последнего изменения</option>
					</select>
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default">Сортировать</button>
		</span>
	</div>
	</form>
</div>
<hr>
<div class="row">
	<table class="table table-hover">
		<thead>
			<tr>
							<th class="input-group col-md-1">№дела</th>
							<th class="input-group col-md-3">Название</th>
							<th class="input-group col-md-3">Автор</th>
							<th class="input-group col-md-3">Статус</th>
							<th class="input-group col-md-1">Дата создания карточки</th>
							<th class="input-group col-md-1">Дата последнего изменения</th>
						</tr>
		</thead>
						<tr>
				<td>0</td>
				<td><a href="rid?id_rid=1">111</a></td>
				<td>zxcvzxcv dvgbzdxf zxcvzxc</td>
				<td>На рассмотрении</td>
				<td>0000-00-00</td>
				<td>2015-00-00</td>
			</tr>
						<tr>
				<td>0</td>
				<td><a href="rid?id_rid=2">рид хуид</a></td>
				<td>zxcvzxcv dvgbzdxf zxcvzxc</td>
				<td>В разработке</td>
				<td>0000-00-00</td>
				<td>2015-00-00</td>
			</tr>
				</table>
</div>
<hr>

	<div class="row">
		<div class="col-md-12">
			footer
		</div>
	</div>
</body>
</html>
<?php }} ?>
