<?php
require 'configBD.php';
require 'query.php';
require '/libs/Smarty.class.php';

$smarty = new Smarty;
$smarty->debugging = true;
$smarty->caching = false;
$smarty->cache_lifetime = 120;

$id = $_GET["id_rid"];


if (isset($id)) {
	// инфо о рид
	$stmt = $_DB->query("SELECT * FROM rids WHERE id='".$id."'");
	while($row = $stmt->fetch()) $rid[] = $row;
	$smarty->assign("rid", $rid);

	$stmt = $_DB->query('SELECT id, name FROM status_rid');
	while($row = $stmt->fetch()) $status[] = $row;
	foreach ($status as $key => $value) {
		if ($value['id'] == $rid[0]['id_status']) $status[$key]['name'] = "<span class='active'>".$value['name']."</span>";
	}
	$smarty->assign("status", $status);

	$smarty->assign("title", $rid[0]['name']);
	$smarty->assign("idRID", $id);
	$smarty->assign("close", "Закрыть");
	$smarty->assign("save", "Сохранить изменения");

	$smarty->assign("moreStatus", "подробнее о статусах");
	$smarty->assign("titleStatus", "Статус РИД");

	$smarty->assign("titleDoc", "Документы РИД");
	$smarty->assign("createDoc", "Добавить документ");
	$smarty->assign("tHeader", array("Документ"=>4, "Тип"=>5, "Дата создания"=>3));

	$smarty->assign("titleInfo", "Информация о РИД");
	$smarty->assign("createInfoRID", "Добавить информацию по РИД");
	$smarty->assign("download", "скачать / посмотреть");
	$smarty->assign("tHeaderInfo", array("Документ"=>8, "ссылка"=>4));
	$smarty->assign("typeInfo", array(
									array(
										"name"=>"Описание",
										"col"=>"description"
									),
									array(
										"name"=>"Реферат",
										"col"=>"referat"
									),
									array(
										"name"=>"Формула",
										"col"=>"formula"
									),
									array(
										"name"=>"Рисунки",
										"col"=>"img"
										)));

	$stmt = $_DB->query('SELECT * FROM status_documents');
	while($statusDoc[] = $stmt->fetch())
	$smarty->assign("statusDoc", $statusDoc);

	$stmt = $_DB->query('SELECT * FROM type_documents');
	while($typeDoc[] = $stmt->fetch())
	$smarty->assign("typeDoc", $typeDoc);

	$stmt = $_DB->query("SELECT * FROM wiev_documents WHERE id='".$id."'");
	while($row = $stmt->fetch()) {
		$arr = explode('/',$row['file']);
		$row['filename'] = $arr[(count($arr) - 1)];
		$Doc[] = $row;
	}
	$smarty->assign("Doc", $Doc);

	$smarty->display("templates/rid.tpl");
}