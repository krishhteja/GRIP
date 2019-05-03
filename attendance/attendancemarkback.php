<?php 
include("../includesatten/functions.php");
	sec_session_start();	
	$a = "btech";
	$t = "grietstudentdetails";
	include("db.php");
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
<form action = "attensublist.php?id=<?php echo $_SESSION['username']; ?>" method="post">
		<table>
        <tr>
			<td>Date:</td>
            <td>
            	<select id = "date" name = "date" />
					<?php
						for($i = 0; $i < 2; $i++){
							$test = date("d");
							$month = date("m");
							$yr = date("Y");
							$date = $test - $i;
							echo "<option value = '$yr-$month-$date'>$month/$date/$yr</option>";
						}
					?>
	</select>
	</td></tr>
    <tr>
        	<td>Year:</td>
			<td>
            <select id = "year" name = "year" />
				<option name = "210">210</option>
	        	<option name = "310">310</option>
	        	<option name = "410">410</option>
			</select>
            </td>
		</tr>
        <tr>
			<td>Section:</td>
            <td>
            <select id = "section" name = "section" />
            	<option name = "A">A</option>
	        	<option name = "B">B</option>
            	<option name = "C">C</option>
	        	<option name = "D">D</option>
            	<option name = "E">E</option>
	        </select>            
        	</td>
		</tr>
        </table>
        <input type = "submit" value = "submit" />
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
                <span class="error">You are not authorized to access this page.</span> Please <a href="../attendance.php">login</a>.
            </p>
        <?php endif; ?>

</body>
</html>
