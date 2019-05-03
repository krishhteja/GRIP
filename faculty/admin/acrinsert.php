<?php 
	include("../../includes1/functions.php");
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
<script language="javascript">
function keyPressed(e){
	var key;
	if(window.event)
		key = window.event.keyCode;
	else
		key = e.which;
	return(key != 13);
}
</script>
<body id="top" oncontextmenu="return false" onKeyPress = "return keyPressed(event)">
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
      <li><a href="report.php">Report</a></li>
      	<li><a href="certiupload.php">Certificate Upload</a></li>
		<li><a href="addfac.php">Add Faculty</a></li>
        <li><a href="../../includes1/logout.php">Logout</a></li>		<!-- Having doubt here -->
      </ul>
	</div>        
    <!-- ###### -->
  </div>
</div>
  <!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">

    <form name = "acrinsert.php" action = "acrinsert1.php" method = "POST">
 	<table>
    	<tr>
        	<td>
            	Faculty ID
            </td>
            <td>
            	<input type="text" name="id" required="required"/>
            </td>
        </tr>
    </table>
    <input type = "submit" name = "submit" value = "submit" />
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
<?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="../../attendance.php">login</a>.
            </p>
        <?php endif; ?>

</body>
</html>
