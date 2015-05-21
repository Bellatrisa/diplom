<?php

require 'configBD.php';
require 'query.php';
require '/libs/Smarty.class.php';
//DEFINE ('SMARTY_RESOURCE_CHAR_SET', 'cp1251');
$smarty = new Smarty;
$smarty->debugging = true;
$smarty->caching = false;
$smarty->cache_lifetime = 120;

if (( array_key_exists('inputNameRID', $_POST)) and
	 ( array_key_exists('inputtype', $_POST)) and
	 ( array_key_exists('inputdate', $_POST)) and
	 ( array_key_exists('inputSurname', $_POST)) and
	 ( array_key_exists('inputName', $_POST)) and
	 ( array_key_exists('inputpatronymic', $_POST)) and
	 ( array_key_exists('inputpost', $_POST)) and
	 ( array_key_exists('inputorganization', $_POST)) and
	 ( array_key_exists('inputdelo', $_POST)) and
	 ( array_key_exists('inputstatus', $_POST))) {
		$inputNameRID = $_POST['inputNameRID'];
		$inputtype = $_POST['inputtype'];
		$inputdate = $_POST['inputdate'];
		$inputSurname = $_POST['inputSurname'];
		$inputName = $_POST['inputName'];
		$inputpatronymic = $_POST['inputpatronymic'];
		$inputpost = $_POST['inputpost'];
		$inputorganization = $_POST['inputorganization'];
		$inputdelo = $_POST['inputdelo'];
		$inputstatus = $_POST['inputstatus'];
		
		$_DB->beginTransaction();

		$queryTxt = "INSERT INTO `authors`(surname, name, patronymic, post) VALUE ('".$inputSurname."', '".$inputName."', '".$inputpatronymic."', '".$inputpost."')";
		doQuery($queryTxt, $_DB);
		$author_id = $_DB->lastInsertId();
		
		$queryTxt = "INSERT INTO `organizations`(name) VALUE ('".$inputorganization."')";
		doQuery($queryTxt, $_DB);
		$oganization_id = $_DB->lastInsertId();
		
		$queryTxt = "INSERT INTO `rids`(name, type, date_create_rid, id_status, number_case, date_create, date_last_change) VALUE ('".$inputNameRID."','".$inputtype."','".$inputdate."', '".$inputstatus."', '".$inputdelo."','".date("Y-m-d")."','".date("Y-m-d")."')";
		doQuery($queryTxt, $_DB);
		$rid_id = $_DB->lastInsertId();
		
		$queryTxt = "INSERT INTO `rid_author`(id_rid, id_author) VALUE ('".$rid_id."','".$author_id."')";
		doQuery($queryTxt, $_DB);
		$queryTxt = "INSERT INTO `rid_organization`(id_rid, id_organization) VALUE ('".$rid_id."','".$oganization_id."')";
		doQuery($queryTxt, $_DB);
		$_DB->commit();
}
$smarty->assign("title", "Карточки РИД");
$smarty->assign("create", "Создать новый РИД");
$smarty->assign("createRID", "Добавить РИД");
$smarty->assign("nameRID", "Название РИД");
$smarty->assign("name", "Имя автора");
$smarty->assign("surname", "Фамилия автора");
$smarty->assign("patronymic", "Отчество автора");
$smarty->assign("post", "Должность");
$smarty->assign("organization", "Организация");
$smarty->assign("type", "Тип");
$smarty->assign("delo", "Номер дела");
$smarty->assign("date", "Дата создания РИД");
$smarty->assign("serchbtn", "Искать");
$smarty->assign("sortbtn", "Сортировать");
$smarty->assign("sort", array("по названию РИД","по автору","по номеру дела","по статусу","по дате создания","по дате последнего изменения"));
$smarty->assign("tHeader", array("№дела" => "1","Название" => "2","Автор" => "2","Организация" => "2","Тип" => "1","Статус" => "2","Дата создания карточки" => "1","Дата последнего изменения" => "1"));

$stmt = $_DB->query('SELECT * FROM wiev_rids');
while ($row = $stmt->fetch())
{
	$rids[] = $row;
}
$smarty->assign("rids", $rids);
$stmt = $_DB->query('SELECT id, name FROM status_rid');
while ($row = $stmt->fetch()) 
{
	$status[] = $row;
}
$stmt = $_DB->query('SELECT id, name FROM status_rid;');
while($row = $stmt->fetch()) 
$statusRID[] = $row;
$smarty->assign("statusRID", $statusRID);



$smarty->display("templates/index.tpl");