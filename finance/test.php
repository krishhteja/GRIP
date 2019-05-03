<?php
	include("db.php");
	$s = $_POST['year'];
	$t = $_POST['dept'];
	$j = $_POST['year'].$_POST['sem'];
	$kp = mysql_query("select subcode from semsub where $t = $j");
	$i = 1;
/*	while($row4 = mysql_fetch_array($kp)){
//		echo $row4['subcode']."</td><td>";
		$n = $_POST['d'.$i];
		mysql_query("insert into exam values('$row4[subcode]', '$n')");
		$i++;
	}
	*/
	switch($s){
		case 1: $d = 'I';
		break;
		case 2: $d = 'II';
		break;
		case 3: $d = 'III';
		break;
		case 4: $d = 'IV';
		break;
	}
	$k = mysql_query("select student from sheet1 where dept = '$t' and year = '$d'");
	while($row = mysql_fetch_array($k)){
		$at = mysql_query("select * from btech where id = '$row[student]'");
		while($row1 = mysql_fetch_array($at)){
			echo "Name: ".$row1['lname']." ".$row1['finame']." ". $row1['mname']."<br>";
			echo "Branch: ".$row1['branch'];
			echo "<img class = 'imgr' src='images/student_images/$row[student].JPG' alt='' width='90' height='100'>";
			echo "<img src = 'Barcode.php?text=$row[student]' alt = 'hello' />";
//			echo "<img src='images/student_images/$row[student].png' alt='' width='90' height='100'>"."<br>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Fee</u>";

	$at = mysql_query("SELECT * FROM fee where $t = $j");
	$i = 1;
	while($row3 = mysql_fetch_array($at)){
		echo "<table width='900'>";
		echo "<tr><td>";
		echo "Tuition Fee"."</td><td>";
			echo $row3['tutfee']."</td><td>";
		echo "Transport Fee"."</td><td>";
			echo $row3['trans']."</td><td>";
		echo "Library Fee"."</td><td>";
			echo $row3['lib']."</td><td>";
		echo "University Fee"."</td><td>";
			echo $row3['univ']."</td><td>";
		echo "Other Fee"."</td><td>";
			echo $row3['other']."</td><td>";
		echo "Special Fee"."</td><td>";
			echo $row3['special']."</td><td>";
		$i++;
		//mysql_query("insert into exam values('$row[subcode]', '$n')");
	}
		echo "<br>";


		}
	}
	?>