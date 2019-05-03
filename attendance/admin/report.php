<?php 
	include("../../includesatten/functions.php");
	sec_session_start();
	include("db.php");
	$usr = $_SESSION['username'];
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
	</div>        
    <!-- ###### -->
  </div>
</div>
  <!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
<form action = "report_gen.php" method="post">
<table width = "900">
<tr><td>From Date:</td><td> <input type="date" name = "from_date" /></td></tr>
<tr><td>To Date:</td><td> <input type="date" name = "to_date" /></td></tr>
<tr><td>Department:</td><td> <input type = "text" name = "dept" /></td></tr>
<tr><td>Year:</td><td><input type = "text" name = "year" /></td></tr>
<tr><td>Section:</td><td><input type = "text" name = "section" /></td></tr>
<tr><td><input type = "submit" value = "submit" name = "report" /></td><td></td></tr>
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
</html>>