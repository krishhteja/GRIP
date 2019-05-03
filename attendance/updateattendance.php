<?php 
	include("../includesatten/functions.php");
	sec_session_start();	
	echo $_SESSION['value'];
	$a = "btech";
	$t = "grietstudentdetails";
	include("../db.php");
	$usr = $_SESSION['username'];
	$k = mysql_query("Select username from facmembers where encemail = '$usr'");
	while($row = mysql_fetch_array($k)){
		$pat = $row['username'];
	}
	$day = date('D');
	$date = $_GET['date'];
	$chrs = mysql_query("select * from attendance_reference where date = '$date' and subject = '$_GET[sub]' and dept = '$_SESSION[dept]' and year = '$_GET[year]' and section = '$_GET[section]' and faculty = '$usr'");
	while($dur = mysql_fetch_array($chrs)){
		$duration = $dur['count_mins'];
	}
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
        <li><a href="updatepwd.php">Change Password</a></li>
        <li><a href="facreport.php">Report</a></li>
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
<form action = "updateattendance.php?section=<?php echo $_GET['section'] ?>&sub=<?php echo $_GET['sub'] ?>&dept=<?php echo $_SESSION['dept'] ?>&year=<?php echo $_GET['year'] ?>&section=<?php echo $_GET['section'] ?>&faculty=<?php echo $usr ?>&date=<?php echo $_GET['date']; ?>" method="post">
	<table width = "300">
	<?php
	$k = mysql_query("select * from academicyear where curyear = '$_GET[year]' and coursecode = '$_GET[dept]' and section = '$_GET[section]'");
	$j = $duration;
	echo "<th>Student</th>";
	for($i = 0; $i <= $j; $i++){
		echo "<th>".$i."</th>";
	}
	while($row = mysql_fetch_array($k)){
		$p = "id";
		$j = $duration;
		echo "<tr><td>".$row[$p]."</td>";	//prints the roll number
		for($i = 0; $i <= $j; $i++){
			echo "<td><input type='radio' name = '".$row[$p]."' value = '".($i).$row[$p]."' checked = 'true'></td>";
		}
		echo "</tr>";
	}

?>
</table>
<input type = "hidden" name = "date" value = "<?php echo $_GET['date'] ?>" >
<input type="submit" onclick="return confirm('Are you sure?')" name = "submit">
</form>
<?php
	if(isset($_POST['submit'])){
		$abc = $_GET['date'];
		mysql_query("update attendance_reference set status = '1' where subject = '$_GET[sub]' and date = '$abc' and faculty = '$usr' and dept = '$_GET[dept]' and section = '$_GET[section]'");
		$k = mysql_query("select * from academicyear where curyear = '$_GET[year]' and coursecode = '$_GET[dept]' and section = '$_GET[section]'");
		while($row = mysql_fetch_array($k)){
			$checkvar = $row['id'];
			if(!empty($_POST[$checkvar])){
				$checked = $_POST[$checkvar];
				$attended = substr($checked, 0, 1);
				$roll = substr($checked, 1, 12);
				$abc = $_POST['date'];
				mysql_query("insert into attendance values('$roll', '$_GET[sub]', '$abc', '$_GET[dept]', '$_GET[year]', '$_GET[section]', '$usr', '$attended')");
			}
		}
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=attendancemark.php">';    
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
                <span class="error">You are not authorized to access this page.</span> Please <a href="../../attendance.php">login</a>.
            </p>
        <?php endif; ?>

</body>
</html>
