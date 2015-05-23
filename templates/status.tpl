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
	<table class="table table-hover">
		<thead>
			<tr>
			{foreach from=$tHeader key=i item=foo}
				<th class="input-group col-md-{$foo}">{$i}</th>
			{/foreach}
			</tr>
		</thead>
			{foreach from=$status item=foo}
			<tr>
				<td>{$foo['name']}</td>
				<td>{$foo['description']}</td>
				<td>{$foo['documents']}</td>
			</tr>
			{/foreach}
	</table>
</div>
<hr>
{include file="footer.tpl"}