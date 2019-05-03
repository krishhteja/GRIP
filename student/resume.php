<?php 
include("../includes/functions.php");
	include("db.php");
sec_session_start();
	
	$a = "btech";
	$t = "grietstudentdetails";
	$k = mysql_query("Select * from btech where id = '$_SESSION[username]'");
	while($row = mysql_fetch_array($k)){
	}
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
     <?php include("griet.php"); ?>
    <br class="clear" />
	  </div>
  </div>
  <!-- ####################################################################################################### -->
  <!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
<?php 
	$k = mysql_query("Select * from btech where id = '$_SESSION[username]'");
	while($row = mysql_fetch_array($k)){
	?><center><?php echo $row['lname']; echo "&nbsp;".$row['finame']; $row['mname']; }?><br />
			<?php 
	$k = mysql_query("Select * from contact where id = '$_SESSION[username]'");
	while($row = mysql_fetch_array($k)){
		echo $row['hno'].",".$row['street'].",".$row['village'].",".",".$row['district'].",".$row['state'].",".$row['pin']; 
	}
		?>    	</center>
    -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    <center> <b>Career Objective</b></center>
    To provide meaningful instruction to students specifically in Social Studies, utilizing my content knowledge, classroom management skills, and pedagogical expertise.<p>

<center><b>Education</b></center><br />

<?php
	$b ;
    if($row['secondarysch']=='SSC') 
	$b = 500;
	else $b = 600;
	$k = mysql_query("select * from btech1 where rollno = '$_SESSION[username]'");
	while($row = mysql_fetch_array($k)){
?>
    <table width="600">
	<th></th>
    <th>Secondary schooling</th>
    <?php
		if($row['type'] == 'R'){
	?>
    <th>Intermediate</th>
    <?php
		}
		else{
	?>
    <th>Diploma</th>
    <?php
		}
		?>
    <tr><td>Board</td>
    <td>
    <?php
    	echo $row['secondarysch'];
	?></td><td>-</td></tr>
    <tr><td>School/college</td><td>-</td><td>-</td></tr>
    <tr><td>Marks</td>
    <td>
    <?php
    	echo $row['ssc'];
	?></td>
    <td>
    <?php
    	echo round($row['inter']);
	?></td></tr>
	<tr><td>Total Marks</td><td><?php echo $b;?></td><td><?php echo "1000";?></td></tr>
    <tr><td>Percentage</td><td><?php $br=$row['ssc']*100/$b; echo round($br,2);?></td><td><?php echo ($row['inter']*100)/1000; } ?></td></tr>
    </table>
    <?php
    $k = mysql_query("select * from grietstudentdetails where rollno  = '$_SESSION[username]'");
		while($row = mysql_fetch_array($k)){
		}?>
<br />
<center><b>Experience</b></center>

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