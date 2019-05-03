<?php
	$con=mysql_connect("localhost","root","root");
	if(!$con){
		echo "mysql error";
	}
	else{
		$db = mysql_select_db("db_grip",$con);
	}
?>

