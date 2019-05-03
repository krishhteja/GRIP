<?php 
	include("../../includesatten/functions.php");
	sec_session_start();	$a = "btech";
	$t = "grietstudentdetails";
	include("db.php");
	$usr = $_SESSION['username'];
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
     <?php include("griet.php"); 	
			?>    
	  </div>
  </div>
  <!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div class="rnd">
    <!-- ###### -->
    <div id="topnav">
      <ul><li><a href="report.php">Report</a></li>
        <li><a href="updatepwd.php">Change Password</a></li>
        <li><a href="attenmodi.php">Modify</a></li>
		<li><a href="status.php">Status</a></li>
		<li><a href="timetable.php">Timetable</a></li>
        <li><a href="../../includesatten/logout.php">Logout</a></li>
      </ul>
	</div>        
    <!-- ###### -->
  </div>
</div>
  <!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
<form action = "timetable.php" method = "POST">
Select day: 
<select id = "week" name = "week" />
<option value = 'Monday'>Monday</option>
<option value = 'Tuesday'>Tuesday</option>
<option value = 'Wednesday'>Wednesday</option>
<option value = 'Thursday'>Thursday</option>
<option value = 'Friday'>Friday</option>
<option value = 'Saturday'>Saturday</option>
</select>
<input type = "submit" value = "submit" name = "sch" />
</form>
<?php
	if(isset($_POST['sch'])){
		echo "<table>";
		$k = mysql_query("select * from timetable where day = '$_POST[week]' and code = '$_SESSION[dept]'");
		while($row = mysql_fetch_array($k)){
			echo "<tr><td>".$row['year']."</td><td>".$row['section']."</td><td>".$row['subname']."</td><td>".$row['faculty']."</td></tr>";
		}
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
