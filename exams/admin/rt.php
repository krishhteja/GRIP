<?php 
	include("db.php");
	$resultpro = mysql_query("SELECT * from `grietfaculty` g,`facultylist1` f where f.date=""");
	$pno = mysql_num_rows($resultpro);
	while($av=mysql_fetch_array($resultpro)){
		echo $av['designation'];
	}
	echo $pno;
?>