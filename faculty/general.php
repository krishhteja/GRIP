<?php 
include("../includes1/functions.php");
	sec_session_start();
	include("db.php");
	$a = "btech1";
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
        <li class = "active"><a href="general.php">Profile</a></li>
		<li><a href="library.php">Library</a></li>
        <li><a href="finance.php">Finance</a></li>
        <li><a href="transport.php">Transport</a></li>
        <li><a href="ecc.php">ECC</a></li>
        <li><a href="acr.php">ACR</a></li>
        <li><a href="studentview.php">Students</a></li>
        <li><a href="notif.php">Message to Students</a></li>
        <li><a href="../includes1/logout.php">Logout</a></li>
      </ul>
	</div>        
    <!-- ###### -->
  </div>
</div>
  <!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
	<?php
		$k = mysql_query("select * from facgen where id = '$_SESSION[username]'");
		while($row = mysql_fetch_array($k)){
	?>
    <table width="900" align="center" cellpadding="2" border="0">
<tr>
<td>Father's Name:</td><td><?php 
					echo $row['fatname'];
		
		?></td>
<td>Spouse Name:</td><td><?php 
					echo $row['sname'];
		?></td>
</tr>
<tr>
<td>DOB:</td><td><?php
			echo $row['dob'];
		
		?></td>
<td>Age:</td><td><?php
	$bday = $row['dob'];
	$today = date('Y-M-D');
	echo $today - $bday;	
		
		?></td> 
</tr>
<?php
		$a = mysql_query("select * from facprof where id = '$_SESSION[username]'");
		while($row = mysql_fetch_array($a)){
?>
<tr><td>Designation: </td><td><?php
									echo $row['desig'];
								?></td>
<td>Qualification: </td><td><?php
									echo $row['qual'];
								?></td></tr>
<td>Papers publisher:</td><td><?php 
			for($i = 1; $i < 5; $i++){
				$at = "pp".$i;
				if(!empty($row[$at])){ 
						echo $row[$at]."<br>";
				}
			}
		}}
		?></td></tr>
<th>Contact</th>
<?php
	$k = mysql_query("select * from facgen where id  =  '$_SESSION[username]'");
	while($row = mysql_fetch_array($k)){
?>
<tr>
<td>Address(temporary):</td><td><?php echo $row['hno']."<br>".$row['street']."<br>".$row['village']."<br>".$row['dist']."<br>".$row['state']."<br>".$row['pin']; 
	?></td>
</tr>

<tr>
<td>Mobile:</td><td><?php echo $row['phone1']; ?></td>
</tr><tr>
<td>Mobile 2:</td><td><?php echo $row['phone2']; ?></td>
</tr>
<tr>
<td>Email:</td><td><?php echo $row['email']; } ?> </td> </tr>
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