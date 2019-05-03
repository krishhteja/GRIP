<?php 
	include("../../includesatten/functions.php");
	sec_session_start();	$a = "btech";
	$t = "grietstudentdetails";
	include("db.php");
	$usr = $_SESSION['username'];
	$timestamp = $_POST['date'];
	$day = date('D', strtotime($timestamp));
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
        <li><a href="attenmodi.php">Modify</a></li>
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
	Classes for today are:
   <form name = "adminmodi.php" action = "insertadminmodi.php" method = "POST">
	<table width = "900">
	<th></th>
    <th>Year</th>
    <th>Section</th>
    <th>Subject Name</th>
    <th>Duration</th>
    <th>Faculty</th>
    <?php
		$i = 0;
		$b = mysql_query("select * from timetable where day like '$day%' and code = 'A05'");
		while($row1 = mysql_fetch_array($b)){
	?>
    <tr>
	<td><input type = "checkbox" name = "<?php echo $i ?>" checked = "checked"  /></td>
    <td><input type = "text" name = "<?php echo 'year'.$i ?>" value = "<?php echo $row1['year']; ?>" /></td>
    <td><input type = "text" name = "<?php echo 'section'.$i ?>" value = "<?php echo $row1['section']; ?>" /></td>
    <td><input type = "text" name = "<?php echo 'subject'.$i ?>" value = "<?php echo $row1['subject']; ?>" /></td>
    <td><input type = "text" name = "<?php echo 'duration'.$i ?>" value = "<?php echo $row1['duration']; ?>" /></td>
    <td><input type = "text" name = "<?php echo 'faculty'.$i?>" value = "<?php echo $row1['faculty']; ?>" /></td>
	</tr>
    <?php
			$i++;
		}
	?>
	</table>
	<input type = "hidden" name = "date" value = "<?php echo $_POST['date']; ?>" />
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
