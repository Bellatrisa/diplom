{config_load file="test.conf" section="setup"}
{include file="header.tpl"}

<div class="row">
	<div class="col-md-9">
		<h1>{$title}</h1>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-md-9">
		<h3>{$titleStatus}</h3>
		{foreach from=$status key=i item=foo}
			{$foo['name']} -&gt; 
		{/foreach}
		В архиве.
		<br>
		<a href="./status.php">{$moreStatus}</a>
	</div>
	<div class="col-md-3">
		<h3>{$titleDoc}</h3>

		<button class="btn btn-danger col-md-12" data-toggle="modal" data-target="#myModal">Добавить новый документ{$createDoc|capitalize}</button>

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">{$createDoc|capitalize}</h4>
				</div>
				<form href="rid.php?insert=true" class="form-horizontal" enctype="multipart/form-data" role="form" id="data" method="post">
					<div class="modal-body">
							<div class="form-group">
								<div class="input-group">
									<label for="inputTypeDoc" class="control-label input-group-addon">тип документа</label>
									<select class="form-control" id="inputTypeDoc" name="inputTypeDoc">
										{foreach from=$typeDoc item=foo}
											<option value="{$foo['id']}">{$foo['name']}</option>
										{/foreach}
									</select>
								</div>
								<br>
								<div class="input-group">
									<label for="inputStatusDoc" class="control-label input-group-addon">статус документа</label>
									<select class="form-control" id="inputStatusDoc" name="inputStatusDoc">
										{foreach from=$statusDoc item=foo}
											<option value="{$statusDoc[id]}">{$foo['name']}</option>
										{/foreach}
									</select>
								</div>
								<br>
								<div class="input-group">
									<label for="inputdate" class="input-group-addon">Дата подписи</label>
									<input class="form-control" type="date" name="inputdate" value="" placeholder="">
								</div>
								<br>
								<input type="file" id="file" name="file" class="btn btn-default col-md-12">
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
						<button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Сохранить изменения</button>
					</div>
				</form>
			</div>
			</div>
		</div>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-md-12">
		<h3>{$titleInfo}</h3>
		{foreach from=$rid item=foo}
		<div class="row col-md-12"><strong>Дело №</strong> {$foo['number_case']}</div>
		<div class="row col-md-12"><strong>Описание</strong> <a href="{$foo['description']}">скачать</a></div>
		<div class="row col-md-12"><strong>Реферат</strong> <a href="{$foo['referat']}">скачать</a></div>
		<div class="row col-md-12"><strong>Формула</strong> <a href="{$foo['formula']}">скачать</a></div>
		<div class="row col-md-12"><strong>Рисунки</strong> <a href="{$foo['image']}">скачать</a></div>
		{/foreach}
		<button type="submit" class="btn btn-danger col-md-3">{$createInfoRID}</button>
	</div>
</div>
	
<hr>
<script>{include file="../scripts/uploadFile.js"}</script>
{include file="footer.tpl"}