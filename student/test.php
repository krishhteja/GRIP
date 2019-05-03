<?php
	$griet = "grietsubjectmaster";
	$semcodes = "grietsubjectmastersemcodes";
	include("db.php");
	$a = mysql_query("select branch from btech where id = (select username from members where encemail =  '$_GET[id]')");
	while($t = mysql_fetch_array($a)){
		$at = $t['branch'];
	}
	$k = mysql_query("select curyear from academics where id = (select username from members where encemail = '$_GET[id]')");
	while($p = mysql_fetch_array($k)){
		$kp = $p['curyear'];
	}echo $kp;
	switch($at){
		case 'CE': $b = "A01";
			break;
		case 'ME': $b = "A03";
			break;
		case 'CSE': $b = "A05";
			break;
		case 'ECE': $b = "A04";
			break;
		case 'EEE': $b = "A02";
			break;
		case 'IT': $b = "A12";
			break;
		case 'BT': $b = "A23";
			break;
		case 'BME': $b = "A11";
			break;
	}echo $b."<br>";
	switch($kp){
		case 'I': $c = "110"; $d = "120";
			break;
		case 'II': $c = "210"; $d = "220";
			break;
		case 'III': $c = "310"; $d = "320";
			break;
		case 'IV': $c = "410"; $d = "420";
			break;
	}
	$wha = "SELECT subjectname FROM  $griet WHERE subjectcode IN (SELECT subjectcode FROM $semcodes WHERE $b = $c || $b = $d)";
	$wa = mysql_query($wha);
	while($row1 = mysql_fetch_array($wa)){
		echo $row1['subjectname']."<input type='text' name = 'test'><br>";
	}

?>	