<?php
require 'ConfigBD.php';
require '/libs/Smarty.class.php';

$smarty = new Smarty;
//$smarty->debugging = true;
$smarty->caching = false;
$smarty->cache_lifetime = 120;

$stmt = $_DB->query('SELECT * FROM status_rid');
while($row = $stmt->fetch()) $status[] = $row;
$smarty->assign("status", $status);
$smarty->assign("title", "Статус РИД");
$smarty->assign("tHeader", array("Статус"=>"2","Пояснение"=>"3","Необходимые документы"=>"7"));

$smarty->display("templates/status.tpl");