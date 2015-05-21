<?php
require '/configBD.php';

$uploaddir = 'uploads/';
$uploadfile = $uploaddir.basename($_FILES['file']['name']);
$id = $_GET["id_rid"];
$_DB->query("INSERT INTO `documents`(id_rid, id_status_doc, `date`, file, type_doc) VALUE (".$id.",".$statusDoc.", ".$inputdate.", '".$uploadfile."', ".$typeDoc.")");

if (copy($_FILES['file']['tmp_name'], $uploadfile)) echo "Успешная загрузка файла";
else echo "Ошибка загрузки";
?>