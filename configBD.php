<?php
//error_reporting(0);

		@define('HOST','localhost');
		@define('DB','rid');
		@define('USER','root');
		@define('PASS','');
		$con='mysql:host='.HOST.';dbname='.DB;
		$_DB = new PDO($con, USER, PASS);
		
	     $charset = 'cp1251';
		 $collation = 'cp1251_general_ci';
	     $charsetQuery1 = "SET NAMES '{$charset}'";
	     $_DB->query($charsetQuery1);
?>