<?php
include("db.php");
$db_host  = "mysql.griet.ac.in";
$db_uid  = "gripadmin";
$db_pass = "DreamWorld";
$db_name  = "db_grip"; 
$db_con = mysql_connect($db_host,$db_uid,$db_pass) or die('could not connect');
mysql_select_db($db_name);
$k = mysql_query("select rollno from studentdetails");
while($row = mysql_fetch_array($k))
	mysql_query("insert into android values ('$row[rollno]', '0')");
?>