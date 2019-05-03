<?php 
include("../includes1/functions.php");
	sec_session_start();	$a = "btech";
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
        <li class = "active"><a href="atten.php">Attendance</a></li>
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

<form action = "attentest.php?id=<?php echo $_SESSION['username']; ?>" method="post">
<?php 
	$s = $_POST['year'];
	switch($s){
		case 'I':   $mv = "110";
					$ns = "120";
				break;
		case 'II':   $mv = "210";
					$ns = "220";
				break;
		case 'III':   $mv = "310";
					$ns = "320";
				break;
		case 'IV':   $mv = "410";
					$ns = "420";
				break;
	}
?>
<table width = "900">
<tr><td>Subject code :</td><td> <select name = "subcode" id = "curyear">
<?php
	include("db.php");
	$t = $_POST['dept'];
	echo $_POST['year'];
	$at = "SELECT * FROM semsub where $t = $mv or $t = $ns";
	$a = mysql_query($at);
	while($row = mysql_fetch_array($a)){

?>
  <option value="<?php echo $row['subcode']; ?>"><?php echo $row['subcode']; }?></option></td></tr>
<tr><td>Date:</td><td> <input type="date" name = "date" /></td></tr>
</table>
<?php
	$k = mysql_query("select * from sheet1 where mentid = (select username from facmembers where encemail = '$_GET[id]') and year = '$_POST[year]' and dept = '$_POST[dept]' and section = '$_POST[section]'");
	while($row = mysql_fetch_array($k)){
		$p = "student";
		echo $row[$p]."&nbsp;&nbsp;<input type='checkbox' name = 'student[]' value = '".$row[$p]."'><br>";
	}
?>
<input type = "hidden" name = "year" value = <?php echo $_POST['year'] ?> />
<input type = "hidden" name = "section" value = <?php echo $_POST['section'] ?> />
<input type = "hidden" name = "dept" value = <?php echo $_POST['dept'] ?> />
<input type = "submit" name = "submit" >
</form>
<?php
	if(isset($_POST['submit'])){
		$checked = $_POST['student'];
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
<?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="../student.php">login</a>.
            </p>
        <?php endif; ?>

</body>
</html>
