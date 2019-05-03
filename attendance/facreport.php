<?php 
include("../includesatten/functions.php");
	sec_session_start();	
	$a = "btech";
	$t = "grietstudentdetails";
	include("../db.php");
	date_default_timezone_set('Asia/Calcutta');
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
	  </div>
  </div>
  <!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div class="rnd">
    <!-- ###### -->
    <div id="topnav">
      <ul>
        <li><a href="updatepwd.php">Change Password</a></li>
        <li><a href="facreport.php">Report</a></li>
        <li><a href="../includesatten/logout.php">Logout</a></li>
      </ul>
	</div>        
    <!-- ###### -->
  </div>
</div>
  <!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
	Marked:
		<table>
        <th>Subject</th><th>Date</th>
		<?php
			$mark = mysql_query("select * from attendance_reference where faculty = '$_SESSION[username]' and status != 0");
			while($row = mysql_fetch_array($mark)){
				echo "<tr><td>".$row['subject']."</td><td>".$row['date']."</td><td>".$row['section']."</td><td>".$row['year']."</td></tr>";
			}
		?>
</table>
	To be marked:
		<table>
        <th>Subject</th><th>Date</th>
		<?php
			$mark = mysql_query("select * from attendance_reference where faculty = '$_SESSION[username]' and status = 0");
			while($row = mysql_fetch_array($mark)){
				echo "<tr><td>".$row['subject']."</td><td>".$row['date']."</td><td>".$row['section']."</td><td>".$row['year']."</td></tr>";
			}
		?>
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
                <span class="error">You are not authorized to access this page.</span> Please <a href="../../attendance.php">login</a>.
            </p>
        <?php endif; ?>

</body>
</html>
