<?php
//error_reporting(0);

		@define('HOST','localhost');
		@define('DB','rid');
		@define('USER','root');
		@define('PASS','');
		$con='mysql:host='.HOST.';dbname='.DB;
		$_DB = new PDO($con, USER, PASS);
?>