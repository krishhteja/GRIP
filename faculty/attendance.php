<?php 
	include("../includes1/functions.php");
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
    <?php //if (login_check($mysqli) == true) : ?>
     <?php include("griet.php"); 	
			echo "<br />";
	include("studenttemp.php");
			?>    
	  </div>
  </div>
  <!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div class="rnd">
    <!-- ###### -->
    <div id="topnav">
      <ul>
        <li><a href="general.php">Profile</a></li>
		<li><a href="library.php">Library</a></li>
        <li><a href="finance.php">Finance</a></li>
        <li><a href="transport.php">Transport</a></li>
        <li><a href="ecc.php">ECC</a></li>
        <li><a href="acr.php">ACR</a></li>
        <li><a href="notif.php">Message to Students</a></li>
        <li><a href="../includes1/logout.php">Logout</a></li>
      </ul>
	</div>        
    <!-- ###### -->
  </div>
</div>
  <!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
<form action = "attendance.php" method="post">
<table width = "900">
<tr><td>Subcode :</td><td> <input type = "text" name = "subcode" /></td></tr>
<tr><td>Date:</td><td> <input type="date" name = "date" /></td></tr>
<tr><td>Department:</td><td> <input type = "text" name = "dept" /></td></tr>
<tr><td>Year:</td><td><input type = "text" name = "year" /></td></tr>
<tr><td>Section:</td><td><input type = "text" name = "section" /></td></tr>
</table>

<?php
	include("db.php");
	//for testing do change the mentid :)
	$k = mysql_query("select * from mentorstudent where mentid = '1113'");
	while($row = mysql_fetch_array($k)){
		$p = "student";
		echo $row[$p]."&nbsp;&nbsp;<input type='checkbox' name = 'student[]' value = '".$row[$p]."'><br>";
	}
?>
<input type = "submit" name = "submit" >
</form>
<?php
	if(isset($_POST['submit'])){
		$checked = $_POST['student'];
		echo count($checked)."<br>";
		for($i = 0; $i < count($checked); $i++){
			if($checked[$i] == true){
				echo $checked[$i]."&nbsp;".$_POST['date']."&nbsp;".$_POST['subcode']."&nbsp;"."p<br>";
				mysql_query("insert into attendance values('$checked[$i]', '$_POST[subcode]', '$_POST[date]', '$_POST[dept]', '$_POST[year]', '$_POST[section]')"); 
			}
		}
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
<?php //else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="../student.php">login</a>.
            </p>
        <?php //endif; ?>

</body>
</html>