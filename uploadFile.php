<?php
require '/configBD.php';

if ($_GET['type']=="doc") {
	$uploaddir = 'uploads/'.'rid'.$_POST['id_rid'].'_';
	$uploadfile = $uploaddir.basename($_FILES['file']['name']);

	if (copy($_FILES['file']['tmp_name'], $uploadfile)) {
		$_DB->query("INSERT INTO `documents`(id_rid, id_status_doc, `date`, file, date_create, type_doc) VALUE".
				  "(".
				  	$_POST['id_rid'].",".
				  	$_POST['inputStatusDoc'].",' ".
				  	$_POST['inputdate']."', '".
				  	$uploadfile."', '".
				  	date("Y-m-d")."', ".
				  	$_POST['inputTypeDoc'].
				  ")");
		header('Location: rid.php?id_rid='.$_POST['id_rid']);
	}
	else echo "Ошибка загрузки";
}
else if ($_GET['type']=="info") {
	$uploaddir = 'uploads/'.'rid'.$_POST['id_rid'].'_';
	$uploadfile = $uploaddir.basename($_FILES['file']['name']);

	if (copy($_FILES['file']['tmp_name'], $uploadfile)) {
		$_DB->query("UPDATE `rids`SET ".$_POST['inputTypeInfo']."='".$uploadfile."', date_last_change = '".date("Y-m-d")."' WHERE id='".$_POST['id_rid']."'");
		header('Location: rid.php?id_rid='.$_POST['id_rid']);
	}
	else echo "Ошибка загрузки";
}
?>