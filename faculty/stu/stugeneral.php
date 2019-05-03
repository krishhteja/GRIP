<?php 
	include("../../includes1/functions.php");
	sec_session_start();
	include("../db.php");
	$a = "btech1";
	$t = "grietstudentdetails";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head>
<link rel="icon" href="../images/grip.ico" type="image/x-icon">
<title>GRIP </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="../styles/layout.css" type="text/css" />
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
     <?php include("../griet.php"); 	
			echo "<br />";
	include("stutemp.php");
			?>    
  			  </div>
  </div>
  <!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div class="rnd">
    <!-- ###### -->
    <div id="topnav">
      <ul>
        <li class="active"><a href="stugeneral.php?student=<?php echo $_GET['student'] ?>">General</a></li>
        <li><a href="stupreadm.php?student=<?php echo $_GET['student'] ?>">Pre admission</a></li>
		<li><a href="stuacademic.php?student=<?php echo $_GET['student'] ?>">Academic</a></li>
        <li><a href="stufinance.php?student=<?php echo $_GET['student'] ?>">Finance</a></li>
		<li><a href="stulibrary.php?student=<?php echo $_GET['student'] ?>">Library</a></li>
        <li><a href="stutransport.php?student=<?php echo $_GET['student'] ?>">Transport</a></li>
        <li><a href="stuextracur.php?student=<?php echo $_GET['student'] ?>">Extra Curricular</a></li></ul>
	</div>        
    <!-- ###### -->
  </div>
</div>
  <!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
	<?php
		$k = mysql_query("select * from contact where id  = '$_GET[student]'");
		while($row = mysql_fetch_array($k)){
	?>
	<h3>Student details:</h3>
    <table width="900" align="center" cellpadding="2" border="0">
<tr>
<td>Father's Name:</td><td><?php 
					echo $row['fname'];
		?></td>
<td>Father's Occupation:</td><td><?php 
					echo $row['focc'];
		?></td>
</tr>
<tr>
<td>Mother's Name:</td><td><?php 
					echo $row['mname'];
		?></td>
<td>Mother's Occupation:</td><td><?php 
					echo $row['mocc'];
		?></td>
</tr>
<tr>
<td>Mobile:</td><td><?php echo $row['phone1']; ?></td>
<td>Father Mobile:</td><td><?php echo $row['phone2']; }?></td>
</tr>
<tr>
<td>DOB:</td><td><?php
		$k = mysql_query("select * from btech where id  = '$_GET[student]'");
		while($row = mysql_fetch_array($k)){
			echo $row['dob'];
		
		?></td>
<td>Age:</td><td><?php
	$bday = $row['dob'];
	$today = date('Y-M-D');
	echo $today - $bday;	
		
		?></td> 
</tr>
<tr>
<td>Religion:</td><td><?php 
			echo $row['religion'];
		?></td>
<td>Caste:</td><td><?php 
			echo $row['cat'];
		?></td>
</tr>
<tr>

<td>Blood Group:</td><td><?php 
			echo $row['blood'];
		?></td>
<td>Nationality:</td> <td><?php 
			echo $row['nat'];
		}?></td>
</tr>
<?php
		$k = mysql_query("select * from contact where id  =  '$_GET[student]'");
		while($row = mysql_fetch_array($k)){
?>
<tr>
<td>Address(temporary):</td><td><?php echo $row['hno']."<br>".$row['street']."<br>".$row['village']."<br>".$row['district']."<br>".$row['state']."<br>".$row['pin']; 
		?></td>
<td>Address(permanent):</td><td><?php echo $row['hno']."<br>".$row['street']."<br>".$row['village']."<br>".$row['district']."<br>".$row['state']."<br>".$row['pin']; 
		}
		?></td>
</tr>
</table>


  </div>
  </div>
  </div>

 <!-- ####################################################################################################### -->

       <div id="copyright">
    <p class="fl_left">Copyright &copy; <?php echo date("Y"); ?> - All Rights Reserved - <a href="../developers.php">GRIET</a></p>
    <br class="clear" />
</div>  <!-- ####################################################################################################### -->
  <br class="clear" />
</div>
<?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="../../student.php">login</a>.
            </p>
        <?php endif; ?>

</body>
</html>