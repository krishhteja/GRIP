<?php 
	include("../includes1/functions.php");
	sec_session_start();	
	$a = "btech";
	$t = "grietstudentdetails";
	include("db.php");
	$usr = $_SESSION['username'];
	$k = mysql_query("Select username from facmembers where encemail = '$usr'");
	while($row = mysql_fetch_array($k)){
		$pat = $row['username'];
	}
	$day = date('D');
	$chrs = mysql_query("select * from timetable where day like '$day%' and subject = '$_GET[sub]' and code = 'A05' and year = '$_GET[year]' and section = '$_GET[section]' and faculty = '$usr'");
	while($dur = mysql_fetch_array($chrs)){
		$duration = $dur['duration'];
	}
	$abc = date('Y/m/d');
	mysql_query("insert into attendance_reference values ('$_GET[sub]', '$duration', '$_GET[dept]', '$_GET[year]', '$_GET[section]', '$abc')");
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
    <?php
//	$b = mysql_query("select * from timetable where day like '$day%' and code = 'A05' and year = '$_GET[year]' and section = '$_GET[section]' and faculty = '$p'");
	//	while($row1 = mysql_fetch_array($b)){
		//	$sub = $row1['subname'];
		//}
	?>
<form action = "updateattendance.php?section=<?php echo $_GET['section'] ?>&sub=<?php echo $_GET['sub'] ?>&dept=A05&year=<?php echo $_GET['year'] ?>&section=<?php echo $_GET['section'] ?>&faculty=<?php echo $p ?>" method = "POST">
	<?php
//	echo $_GET['section']." ".$_GET['sub']." ".$_GET['dept']." ".$_GET['year']." ".$_GET['section']." ".$_GET['faculty'];
	$k = mysql_query("select * from academics where curyear = '$_GET[year]' and coursecode = '$_GET[dept]' and section = '$_GET[section]'");
	while($row = mysql_fetch_array($k)){
		$p = "id";
		$j = $duration/50;
		echo $row[$p];	//prints the roll number
		for($i = 0; $i < $j; $i++){
			echo "&nbsp;&nbsp;".($i+1)."<input type='radio' name = '".$row[$p]."' value = '".($i+1).$row[$p]."'>";
		}
		echo "<br>";
	}


?>
<input type = "submit" name = "submit" >
</form>
<?php
	if(isset($_POST['submit'])){
		$k = mysql_query("select * from academics where curyear = '$_GET[year]' and coursecode = '$_GET[dept]' and section = '$_GET[section]'");
		while($row = mysql_fetch_array($k)){
			$checkvar = $row['id'];
			if(!empty($_POST[$checkvar])){
				$checked = $_POST[$checkvar];
				$attended = substr($checked, 0, 1);
				$roll = substr($checked, 1, 12);
				$abc = date('Y/m/d');
				mysql_query("insert into attendance values('$roll', '$_GET[sub]', '$abc', '$_GET[dept]', '$_GET[year]', '$_GET[section]', '$usr', '$attended')");
			}
		}
/*




		$checked = $_POST['student'];
		for($i = 0; $i < count($checked); $i++){
			if($checked[$i] == true){
				$attended = substr($checked[$i], 0, 1);
				$roll = substr($checked[$i], 1, 12);
				echo $checked[$i]."&nbsp;".date('Y/m/d')."&nbsp;".$sub."&nbsp;".$pat."&nbsp;".$_GET['dept']."<br>";
				$abc = date('Y/m/d');
				mysql_query("insert into attendance values('$roll', '$sub', '$abc', '$_GET[dept]', '$_GET[year]', '$_GET[section]', '$pat', '$attended')");
			}
		}
	*/}
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
