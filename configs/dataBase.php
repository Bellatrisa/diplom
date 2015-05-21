<?php
//error_reporting(0);

$host = "127.0.0.1";
$user = "root";
$pass = "";
$db   = "xui";

$con = mysql_connect($host, $user, $pass) or die("ERROR: ".mysql_error());
	   mysql_select_db($db) or die("ERROR: ".mysql_error());
?>