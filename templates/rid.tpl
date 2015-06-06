{config_load file="test.conf" section="setup"}
{include file="header.tpl"}

<div class="row">
	<div class="col-md-9">
		<h1>{$title}</h1>
	</div>
	<a href="./" class="btn btn-default col-md-3" role="button">На главную</a>
</div>
<hr>
<div class="row">
	<div class="col-md-12">
		<h3>{$titleStatus}</h3>
		{foreach from=$status key=i item=foo}
			{$foo['name']} -&gt; 
		{/foreach}
		В архиве.
		<br>
		<a href="./status.php">{$moreStatus}</a>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-md-6">
		<!-- окно для добавления инфо о РИД -->
		<h3>{$titleInfo} № <strong>{$rid[0]['number_case']}</strong></h3>
		<button type="submit" class="btn btn-danger col-md-6" data-toggle="modal" data-target="#myModalInfo">{$createInfoRID}</button>

		<div class="modal fade" id="myModalInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">{$createInfoRID}</h4>
				</div>
				<form action="uploadFile.php?type=info" class="form-horizontal" enctype="multipart/form-data" role="form" id="dataInfo" method="post">
					<div class="modal-body">
							<div class="form-group">
								<select class="form-control" id="inputTypeInfo" name="inputTypeInfo">
									{foreach from=$typeInfo key=i item=foo}
										<option value="{$foo['col']}">{$foo['name']}</option>
									{/foreach}
								</select>
								<br>
								<div class="form-group col-md-12">
									<input type="file" id="file" name="file" class="btn btn-default" required>
									<div class="help-block with-errors"></div>
								</div>
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">{$close}</button>
						<button type="submit" class="btn btn-danger" name="id_rid" value="{$idRID}" >{$save}</button>
					</div>
				</form>
			</div>
			</div> 
		</div>
		<!-- вывод из бд -->
		{foreach from=$rid item=foo}
		<table class="table table-hover">
			<thead>
				<tr>
				{foreach from=$tHeaderInfo key=i item=foo}
					<th class="input-group col-md-{$foo}">{$i}</th>
				{/foreach}
				</tr>
			</thead>
				<tr>
					<td>{$typeInfo[0]['name']}</td>
					<td>{if $rid[0]['description']!=""}<a target="_blank" href="{$rid[0]['description']}">{$download}</a>{/if}</td>
				</tr>
				<tr>
					<td>{$typeInfo[1]['name']}</td>
					<td>{if $rid[0]['referat']!=""}<a target="_blank" href="{$rid[0]['referat']}">{$download}</a>{/if}</td>
				</tr>
				<tr>
					<td>{$typeInfo[2]['name']}</td>
					<td>{if $rid[0]['formula']!=""}<a target="_blank" href="{$rid[0]['formula']}">{$download}</a>{/if}</td>
				</tr>
				<tr>
					<td>{$typeInfo[3]['name']}</td>
					<td>{if $rid[0]['img']!=""}<a target="_blank" href="{$rid[0]['img']}">{$download}</a>{/if}</td>
				</tr>
		</table>
		{/foreach}
	</div>
	<div class="col-md-6">
		<!-- окно для добавления документов -->
		<h3>{$titleDoc}</h3>

		<button class="btn btn-danger col-md-6" data-toggle="modal" data-target="#myModal">{$createDoc|capitalize}</button>

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">{$createDoc|capitalize}</h4>
				</div>
				<form action="uploadFile.php?type=doc" class="form-horizontal" enctype="multipart/form-data" role="form" id="data" method="post">
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
											<option value="{$foo['id']}">{$foo['name']}</option>
										{/foreach}
									</select>
								</div>
								<br>
								<div class="form-group col-md-12">
									<div class="input-group">
										<label for="inputdate" class="input-group-addon">Дата подписи</label>
										<input class="form-control" type="date" name="inputdate" value="" required>
										<div class="help-block with-errors"></div>
									</div>
									<div class="help-block with-errors"></div>
								</div>
								<br>
								<div class="input-group col-md-12">
									<input type="file" id="file" name="file" class="btn btn-default" required>
									<div class="help-block with-errors"></div>
								</div>
								
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">{$close}</button>
						<button type="submit" class="btn btn-danger" name="id_rid" value="{$idRID}">{$save}</button>
					</div>
				</form>
			</div>
			</div>
		</div>
		<div class="row"></div>
		<!-- вывод документов из бд -->
		<table class="table table-hover">
			<thead>
				<tr>
				{foreach from=$tHeader key=i item=foo}
					<th class="input-group col-md-{$foo}">{$i}</th>
				{/foreach}
				</tr>
			</thead>
				{foreach from=$Doc key=i item=foo}
				<tr>
					<td><a target="_blank" href="{$foo['file']}">{$foo['filename']}</a></td>
					<td>{$foo['type']}</td>
					<td>{$foo['date']}</td>
				</tr>
				{/foreach}
		</table>
	</div>
</div>
	
<hr>

{include file="footer.tpl"}