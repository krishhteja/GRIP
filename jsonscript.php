<?php
	include("db.php");
	$sn = mysql_query("select sum(attendance) as attended from android where id = '".$_POST["id"]."'");
	while($row = mysql_fetch_array($sn))
		$cond[] = $row['attendance']; 
	print(json_encode($cond));
?>