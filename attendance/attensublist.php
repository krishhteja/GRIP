<?php 
	include("../includesatten/functions.php");
	sec_session_start();	$a = "btech";
	$t = "grietstudentdetails";
	include("db.php");
	$usr = $_SESSION['username'];
	$k = mysql_query("Select username from facmembers where encemail = '$usr'");
		while($row = mysql_fetch_array($k)){
			$p = $row['username'];
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
     <?php include("griet.php"); 	
			?>    
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
	<?php
		$day = date('D');
		$date = $_POST['date'];
		$b = mysql_query("select * from attendance_reference where date = '$_POST[date]' and dept = '$_SESSION[dept]' and year = '$_POST[year]' and section = '$_POST[section]' and faculty = '$usr' and status = '0'");
//		echo "select * from attendance_reference where date = '$_POST[date]' and dept = '$_SESSION[dept]' and year = '$_POST[year]' and section = '$_POST[section]' and faculty = '$usr' and status = '0'";
		while($row1 = mysql_fetch_array($b)){
	?>
    Mark Attendance For &nbsp;
    <a href = "updateattendance.php?section=<?php echo $_POST['section'] ?>&sub=<?php echo $row1['subject'] ?>&dept=<?php echo $_SESSION['dept'] ?>&year=<?php echo $_POST['year'] ?>&section=<?php echo $_POST['section'] ?>&faculty=<?php echo $usr ?>&date=<?php echo $date ?>">
    <?php
			echo $row1['subject'];
	?>
    </a><br />
    <?php
		}
	?>
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
                <span class="error">You are not authorized to access this page.</span> Please <a href="../attendance.php">login</a>.
            </p>
        <?php endif; ?>

</body>
</html>
