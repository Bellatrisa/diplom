<?php
function doQuery( $queryTxt, &$db, $rollback=true ) {
		$db->query( $queryTxt );
	//		echo "query: ".$queryTxt."<br>";
		if($db->errorCode()!='0000') {
			$errorInfo = $db->errorInfo();
			if( $rollback ) {
				$db->rollback();
			}
			echo "query: ".$queryTxt."<br>";
			die ("DB Error: ".$errorInfo[2]);
		}
	}
?>