<?php 
include("../includes1/functions.php");
	sec_session_start();	$a = "btech";
	$t = "grietstudentdetails";
include("db.php");
$at = date(Y);
 $k = mysql_query("insert into fee values('$at', '$_POST[tutfee]', '$_POST[trans]', '$_POST[lib]', '$_POST[univ]', '$_POST[other]', '$_POST[special]')");
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
    <?php // if (login_check($mysqli) == true) : ?>
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
	</div>        
    <!-- ###### -->
  </div>
</div>
  <!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">

   <form action = "financetest2.php" method="post">
<table width = "400">
<tr><td>Department:</td><td> <select name = "dept" id = "curyear">
  <option value="A05">CSE</option>
  <option value="A01">CE</option>
  <option value="A02">EEE</option>
  <option value="A03">ME</option>
  <option value="A04">ECE</option>
  <option value="A12">IT</option>
  <option value="A23">BT</option>
  <option value="A11">BME</option>

</select>
</td></tr>
<tr><td>Year:</td><td><select name = "year" id = "year">
  <option value="1">I</option>
  <option value="2">II</option>
  <option value="3">III</option>
  <option value="4">IV</option>
  </select>
  </td></tr>
<tr><td>Semester:</td><td><select name = "sem" id = "sem">
  <option value="10">I</option>
  <option value="20">II</option>
  </select>
  </td></tr>
</table>
<input type = "submit" name = "submit" />

		
	


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
<?php // else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="../student.php">login</a>.
            </p>
        <?php // endif; ?>

</body>
</html>