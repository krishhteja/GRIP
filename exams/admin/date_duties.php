<?php 
	include("../../includesexam/functions.php");
	sec_session_start();
	include("db.php");
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
     <?php include("griet.php"); 	
			echo "<br />";
			?>    
	  </div>
  </div>
  <!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div class="rnd">
    <!-- ###### -->
    <div id="topnav">
      <ul><li><a href="final_report.php">PREVIOUS REPORTS</a></li>
        <li><a href="../../includesexam/logout.php">Logout</a></li>
      </ul>
	</div>        
    <!-- ###### -->
  </div>
</div>
  <!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
<form  action="dates.php" method="POST" >

<tr><td  align=left  >  

<h4><i>Enter no of days of examinations: <input type="text" name="noofdays" align="center"><h4>

<input type="submit" name="submit" value="submit" align="center"></i>
<br>
<?php
	mysql_query("TRUNCATE TABLE ASSIGN ");
	mysql_query("TRUNCATE TABLE facultylist1");
	mysql_query("TRUNCATE TABLE TT ");
	mysql_query("UPDATE grietfaculty SET countfn='0' where countfn>'0'");
	mysql_query("UPDATE grietfaculty SET countan='0' where countan>'0'");
?>




  </div>
  </div>
  </div>

 <!-- ####################################################################################################### -->

       <div id="copyright">
	   <br>
    <p class="fl_left">Copyright &copy; <?php echo date("Y"); ?> - All Rights Reserved - <a href="../developers.php">GRIET</a></p>
    <br class="clear" />
</div>  <!-- ####################################################################################################### -->
  <br class="clear" />
</div>
<?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please<a href="../../examlogin.php"><u> login</u></a>.
            </p>
        <?php endif; ?>

</body>
</html>