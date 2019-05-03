<?php 
	include("../includes/functions.php");
	sec_session_start();
	include("db.php");
	$usr = $_SESSION['username'];
	$a = "btech";
	$t = "grietstudentdetails";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head>
<link rel="icon" href="images/grip.ico" type="image/x-icon">
<title>GRIP </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
</head>
<script language="javascript">
document.onmousedown=disableclick;
status="Right Click Disabled";
function disableclick(event)
{
  if(event.button==2)
   { return false;    
   }
}
</script>
<body id="top" oncontextmenu="return false">
<div class="wrapper">
  <!-- ####################################################################################################### -->
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
    <?php if (login_check($mysqli) == true) : ?>
     <?php include("griet.php"); 	
			echo "<br />";
	include("studenttemp.php");
			?>    
	  </div>
  </div>
  <!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div class="rnd">
    <!-- ###### -->
    <div id="topnav">
      <ul>
        <li><a href="general.php">General</a></li>
        <li><a href="preadm.php">Pre admission</a></li>
		<li class="active"><a href="academic.php">Academic</a></li>
        <li><a href="finance.php">Finance</a></li>
		<li><a href="library.php">Library</a></li>
        <li><a href="transport.php">Transport</a></li>
        <li><a href="extracur.php">Extra Curricular</a></li>
        <li><a href="../includes/logout.php">Logout</a></li>
      </ul>
	</div>        
    <!-- ###### -->
  </div>
</div>
  <!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
   <h3>Academic Details:</h3>
    <table width = "400" align="left">
	<tr><td><?php 
		$sn = mysql_query("select count from attendance where id = '$_SESSION[username]'");
		while($row = mysql_fetch_array($sn)){
			$test[] = $row['count'];
		}
		$b = substr($_SESSION['username'], 5, 3);
		echo "Attended : </td><td>".array_sum($test)."</td></tr>";
		$s = mysql_query("select count_mins from attendance_reference where dept = '$b' and year = (select curyear from academicyear where id = '$_SESSION[username]') and section = (select section from academicyear where id = '$_SESSION[username]')");
		while($row1 = mysql_fetch_array($s)){
			$conducted[] = $row1['count_mins'];
		}
		echo "<tr><td>Total num of classes conducted : </td><td>". (array_sum($conducted))."</td></tr>"; 
		echo "<tr><td>Attendance % :</td><td> ". round((array_sum($test)) * 100 / (array_sum($conducted)), 2). "</td></tr>";
	?>
</td></tr>
</td></tr></table>
<?php

?>
<table align="right" width = "500">
<?php
	$dept = substr($_SESSION['username'],5,3);
	$semcode = mysql_query("select subjectcode from grietsubjectmastersemcodes where $dept = (select curyear from academicyear where id = '$_SESSION[username]')");
	for($i = 0; $i < mysql_num_rows($semcode); $i++){
		mysql_data_seek($semcode, $i);
		$row = mysql_fetch_assoc($semcode);
		$sub = mysql_query("select sum(count) from attendance where subcode = '$row[subjectcode]' and id = '$_SESSION[username]'");
		$subname = mysql_query("select subjectname from grietsubjectmaster where subjectcode = '$row[subjectcode]'");
		$subcon = mysql_query("select sum(count_mins) from attendance_reference where dept = '$dept' and year = (select curyear from academicyear where id = '$_SESSION[username]') and section = (select section from academicyear where id = '$_SESSION[username]') and subject = '$row[subjectcode]'");
		for($j = 0; $j < mysql_num_rows($subname); $j++){
			mysql_data_seek($subname, $j);
			$row1 = mysql_fetch_assoc($subname);
		}
		$attended = mysql_fetch_array($sub);
		$conducted = mysql_fetch_array($subcon);
		echo "<tr><td><a href = 'attendcalendar.php?sub=".$row['subjectcode']."'>".$row['subjectcode']."</a></td><td>".$row1['subjectname']."</td><td>".($attended[0]/1)."</td><td>".($conducted[0])."</td>";
		if($conducted[0] != 0)
			echo "<td>".round($attended[0]*100/($conducted[0]), 2)."</td></tr>";
		else
			echo "<td>0</td></tr>";

	}
/*
	while($row = mysql_fetch_array($semcode)){
		echo "<tr><td><a href = 'subjectattendance.php?sub=".$row['subjectcode']."'>".$row['subjectcode']."</a></td></tr>";
	}
	*/
?>
</table>
	<table width="900">
<?php
		$k = mysql_query("select * from academics where id  =  '$_SESSION[username]'");
		while($row = mysql_fetch_array($k)){
		$p = $row['id'];
	
?>
    <th>Semester</th><th>Marks</th><th>Percentage</th><th>Backlogs</th>
<?php
	if(!empty($row['IyIsmar'])){	
?>
    <tr><td>IY-IS</td><td><?php echo $row['IyIsmar']; ?></td><td><?php echo $row['IyIsper']; ?></td><td><?php echo $row['IyIsbck']; }?></td></tr>        
<?php
	if(!empty($row['IyIIsmar'])){	
?>
    <tr><td>IY-IIS</td><td><?php echo $row['IyIIsmar']; ?></td><td><?php echo $row['IyIIsper']; ?></td><td><?php echo $row['IyIIsbck']; }?></td></tr>        
<?php
	if(!empty($row['IIyIsmar'])){	
?>
    <tr><td>IIY-IS</td><td><?php echo $row['IIyIsmar']; ?></td><td><?php echo $row['IIyIsper']; ?></td><td><?php echo $row['IIyIsbck']; }?></td></tr>        
<?php
	if(!empty($row['IIyIIsmar'])){	
?>
    <tr><td>IIY-IIS</td><td><?php echo $row['IIyIIsmar']; ?></td><td><?php echo $row['IIyIIsper']; ?></td><td><?php echo $row['IIyIIsbck']; }?></td></tr>        
<?php
	if(!empty($row['IIIyIsmar'])){	
?>
    <tr><td>IIIY-IS</td><td><?php echo $row['IIIyIsmar']; ?></td><td><?php echo $row['IIIyIsper']; ?></td><td><?php echo $row['IIIyIsbck']; }?></td></tr>        
<?php
	if(!empty($row['IIIyIIsmar'])){	
?>
    <tr><td>IIIY-IIS</td><td><?php echo $row['IIIyIIsmar']; ?></td><td><?php echo $row['IIIyIIsper']; ?></td><td><?php echo $row['IIIyIIsbck']; }?></td></tr>        
<?php
	if(!empty($row['IVyIsmar'])){	
?>
    <tr><td>IVY-IS</td><td><?php echo $row['IVyIsmar']; ?></td><td><?php echo $row['IVyIsper']; ?></td><td><?php echo $row['IVyIsbck']; }?></td></tr>        
<?php
	if(!empty($row['IVyIIsmar'])){	
?>
    <tr><td>IVY-IIS</td><td><?php echo $row['IVyIIsmar']; ?></td><td><?php echo $row['IVyIIsper']; ?></td><td><?php echo $row['IVyIIsbck']; }}?></td></tr>        
   
</table>
  </div>
  </div>
  </div>

 <!-- ####################################################################################################### -->

       <div id="copyright">
    <p class="fl_left">Copyright &copy; <?php echo date("Y"); ?> - All Rights Reserved - <a href="developers.php">GRIET</a></p>
    <br class="clear" />
</div>  <!-- ####################################################################################################### -->
  <br class="clear" />
</div>
<?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="../student.php">login</a>.
            </p>
        <?php endif; ?>

</body>
</html>