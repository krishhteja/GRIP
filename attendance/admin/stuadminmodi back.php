<?php 
	include("../../includesatten/functions.php");
	sec_session_start();	
	$a = "btech";
	$t = "grietstudentdetails";
	include("db.php");
	$usr = $_SESSION['username'];
	echo $_POST['date'];
	$chrs = mysql_query("select * from attendance_reference where date = '$_POST[date]' and subject = '$_POST[subject]' and dept = 'A05' and year = '$_POST[year]' and section = '$_POST[section]'");
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
    <form name = "adminmodi.php" action = "stuadminmodi.php" method = "POST">
	<table>
    <?php
	$k = mysql_query("select id from academicyear aca where  CURYEAR =  '$_POST[year]' AND section =  '$_POST[section]'
AND not exists (select id from attendance att where subcode = '$_POST[subject]' and date = '$_POST[date]' and year = '$_POST[year]' and section = '$_POST[section]' and aca.id = att.id)");
	$j = $duration/45;
	echo "<th>Student</th>";
	for($i = 0; $i <= $j; $i++){
		echo "<th>".$i."</th>";
	}
	while($a = mysql_fetch_array($k)){
		$j = $duration/45;
		$p = "id";
		echo "<tr><td>".$a[$p]."</td>";	//prints the roll number
		for($i = 0; $i <= $j; $i++){
			echo "<td><input type='radio' name = '".$a[$p]."' value = '".($i).$a[$p]."' checked = 'true'></td>";
		}
		echo "</tr>";
	}
		
	?>
</table>    <input type = "hidden" name = "subject" value = <?php echo $_POST['subject'] ?> />
    <input type = "hidden" name = "date" value = <?php echo $_POST['date'] ?> />
    <input type = "hidden" name = "section" value = <?php echo $_POST['section'] ?> />
    <input type = "hidden" name = "year" value = <?php echo $_POST['year'] ?> />
    <input type = "submit" name = "update" value = "submit" />
    </form>
  </div>
  </div>
  </div>
  <?php
	if(isset($_POST['update'])){
		$k = mysql_query("select id from academicyear aca where  CURYEAR =  '$_POST[year]' AND section =  '$_POST[section]'
AND not exists (select id from attendance att where subcode = '$_POST[subject]' and date = '$_POST[date]' and year = '$_POST[year]' and section = '$_POST[section]' and aca.id = att.id)");
	while($row = mysql_fetch_array($k)){
			$checkvar = $row['id'];
			if(!empty($_POST[$checkvar])){
				$checked = $_POST[$checkvar];
				$attended = substr($checked, 0, 1);
				$roll = substr($checked, 1, 12);
				$dept = substr($roll, 5, 3);
				$abc = date('Y/m/d');
				mysql_query("insert into attendance values('$roll', '$_POST[subject]', '$abc', '$dept', '$_POST[year]', '$_POST[section]', '$usr', '$attended')");
			}
		}
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=attenmodi.php">';    
    	exit;
  	}
	?>
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
