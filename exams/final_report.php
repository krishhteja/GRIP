<?php 
	include("../includesexam/functions.php");
	sec_session_start();
	include("db.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head>
<link rel="icon" href="C:/wamp/www/exam1/images/logo.jpg" type="image/x-icon">
<img src="C:/wamp/www/exam1/images/logo.jpg" align="right"/>

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
    <?php //if (login_check($mysqli) == true) : ?>
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
      </ul>
	</div>        
    <!-- ###### -->
  </div>
</div>
  <!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
<center><h1>Invigilations</h1>
 
 <a href="Report.php">Finalreport</a><br />
 <a href="date.php">Date of the examination</a> <br />
 <a href="faculty.php">Faculty Id</a><br />
 <a href="department.php">Department</a><br />
 </center>
</form>





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
<?php /*else : 
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="../examlogin.php">login</a>.
            </p>
         //endif; */?>

</body>
</html>