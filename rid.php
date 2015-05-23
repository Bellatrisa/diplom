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
	$stmt = $_DB->query("SELECT * FROM rids WHERE id='".$id."'");
	while($row = $stmt->fetch()) $rid[] = $row;
	$smarty->assign("rid", $rid);

	$stmt = $_DB->query('SELECT id, name FROM status_rid');
	while($row = $stmt->fetch()) $status[] = $row;
	foreach ($status as $key => $value) {
		if ($value['id'] == $rid[0]['id_status']) $status[$key]['name'] = "<span class='active'>".$value['name']."</span>";
	}

$smarty->assign("title", $rid[0]['name']);
$smarty->assign("createDoc", "Добавить документ");
$smarty->assign("idRID", $id);
$smarty->assign("createInfoRID", "Добавить информацию по РИД");
$smarty->assign("moreStatus", "подробнее о статусах");

$smarty->assign("titleStatus", "Статус РИД");
$smarty->assign("titleDoc", "Документы РИД");
$smarty->assign("titleInfo", "Информация о РИД");

$smarty->assign("status", $status);

$stmt = $_DB->query('SELECT * FROM status_documents');
while($row = $stmt->fetch()) $statusDoc[] = $row;
$smarty->assign("statusDoc", $statusDoc);

$stmt = $_DB->query('SELECT * FROM type_documents');
while($row = $stmt->fetch()) $typeDoc[] = $row;
$smarty->assign("typeDoc", $typeDoc);

$smarty->display("templates/rid.tpl");
}