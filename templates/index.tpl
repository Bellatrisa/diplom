{config_load file="test.conf" section="setup"}
{include file="header.tpl"}

<div class="row">
	<div class="col-md-9">
		<h1>{$title}</h1>
	</div>
	<button data-toggle="modal" data-target="#myModal" class="btn btn-danger col-md-3">{$create}</button>
	<!-- Модальное окно -->
	<div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">{$createRID|capitalize}</h4>
			</div>
			<form href="index.php?insert=true" class="form-horizontal" enctype="multipart/form-data" role="form" id="data" method="post">
				<div class="modal-body">
					<input class="form-control" id="inputNameRID" type="text" name="inputNameRID" value="" placeholder="{$nameRID}">
					<br>
					<input class="form-control" type="text" name="inputSurname" value="" placeholder="{$surname}">
					<input class="form-control" type="text" name="inputName" value="" placeholder="{$name}">
					<input class="form-control" type="text" name="inputpatronymic" value="" placeholder="{$patronymic}">
					<br>
					<input class="form-control" type="text" name="inputpost" value="" placeholder="{$post}">
					<br>
					<input class="form-control" type="text" name="inputorganization" value="" placeholder="{$organization}">
					<br>
					<input class="form-control" type="text" name="inputtype" value="" placeholder="{$type}">
					<br>
					<input class="form-control" type="text" name="inputdelo" value="" placeholder="{$delo}">
					<br>
					<div class="input-group">
						<label for="inputstatus" class="control-label input-group-addon">статус РИД</label>
						<select class="form-control" id="inputstatus" name="inputstatus">
							{foreach from=$statusRID item=foo}
								<option value="{$foo['id']}">{$foo['name']}</option>
							{/foreach}
						</select>
					</div>
					<br>
					<div class="input-group">
						<label for="inputdate" class="input-group-addon">Дата создания РИД</label>
						<input class="form-control" type="date" name="inputdate" value="" placeholder="{$date}">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
					<button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#myModal">{$createRID}</button>
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
			<button type="submit" class="btn btn-default">{$serchbtn}</button>
		</span>
	</div>
	<div class="input-group col-md-4">
		<select class="form-control">
			{foreach from=$sort key=i item=foo}
				<option value="{$i}">{$foo}</option>
			{/foreach}
		</select>
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default">{$sortbtn}</button>
		</span>
	</div>
	</form>
</div>-->
<hr>
<div class="row">
	<table class="table table-hover">
		<thead>
			<tr>
			{foreach from=$tHeader key=i item=foo}
				<th class="input-group col-md-{$foo}">{$i}</th>
			{/foreach}
			</tr>
		</thead>
			{foreach from=$rids key=i item=foo}
			<tr>
				<td>{$foo['number']}</td>
				<td><a href="rid.php?id_rid={$foo['id']}">{$foo['name']}</a></td>
				<td>{$foo['authorn']} {$foo['authors']} {$foo['authorp']}</td>
				<td>{$foo['organization']}</td>
				<td>{$foo['type']}</td>
				<td>{$foo['status']}</td>
				<td class="date">{$foo['date_create']}</td>
				<td class="date">{$foo['date_last_change']}</td>
			</tr>
			{/foreach}
	</table>
</div>
<hr>
<script>
	$('#myForm').validator();
</script>

{include file="footer.tpl"}
