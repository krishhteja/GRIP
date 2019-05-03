<?php 
	include("../includes/functions.php");
	sec_session_start();
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
        <li><a href="general.php">General</a></li>
        <li><a href="preadm.php">Pre admission</a></li>
		<li class="active"><a href="academic.php">Academic</a></li>
        <li><a href="finance.php">Finance</a></li>
		<li><a href="library.php">Library</a></li>
        <li><a href="transport.php">Transport</a></li>
        <li><a href="extracur.php">Extra Curricular</a></li>
        <li><a href="../includes/logout.php">Logout</a></li>
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
define("ADAY", (60*60*24));


if ((!isset($_POST['month'])) || (!isset($_POST['year']))) {
	$nowArray = getdate();
	$month = $nowArray['mon'];
	$year = $nowArray['year'];
} else {
	$month = $_POST['month'];
	$year = $_POST['year'];
}
$start = mktime(12,0,0,$month,1,$year);
$firstDayArray = getdate($start);
?>
<html>
<head>
<title><?php echo "Calendar: ".$firstDayArray['month']."" . $firstDayArray['year']; ?></title>
<script LANGUAGE="Javascript">
<!-- Begin
function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=780,height=550, left = 0,top = 150');");
}
// End -->
</script>

</head>
<body>
<form method="post" action="attendcalendar.php">
  <div align="center">
    <select name="month">
      <?php
$months = Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

for ($x=1; $x<=count($months); $x++){
	echo "<option value=\"$x\"";
	if ($x == $month){
		echo " selected";
	}
	echo ">".$months[$x-1]."</option>";
}
?>
    </select>
    <select name="year">
      <?php
for ($x=2000; $x<=2025; $x++){
	echo "<option";
	if ($x == $year){
		echo " selected";
	}
	echo ">$x</option>";
}
?>
    </select>
  <input type="submit" name="submit" value="Select!">
  </div>
</form>
<br />
<?php
$days = Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
echo "<table border=\"2\" cellpadding=\"5\"><tr>\n";
echo "<col width=100>
 <col width=100>
 <col width=100>
 <col width=100>
 <col width=100>
 <col width=100>
 <col width=100>";
foreach ($days as $day) {
	echo "<td style=\"background-color: #CCCCCC; text-align: center;\">
	      <strong>$day</strong></td>\n";
}

for ($count=0; $count < (6*7); $count++) {
	$dayArray = getdate($start);
	if (($count % 7) == 0) {
		if ($dayArray["mon"] != $month) {
			break;
		} else {
			echo "</tr><tr>\n";
		}
	}
	if ($count < $firstDayArray["wday"] || $dayArray["mon"] != $month) {
		echo "<td> </td>\n";
	} 
	else {
		$chkEvent_sql = "SELECT count FROM attendance WHERE id = '".$_SESSION['username']."' and month(date) = '".$month."' AND dayofmonth(date) = '".$dayArray["mday"]."' AND year(date) = '".$year."' and subcode = '".$_GET['sub']."'";
		$chkEvent_res = mysql_query($chkEvent_sql);
		$chkEvent_res = mysql_query($chkEvent_sql);
		if ($dayArray["mday"]==date("d")&&$month==date("d")) {
		    echo "<td style=\"background-color: #333333; text-align: center;\">
	    	 ".$dayArray["mday"]."<br>"."</td>\n"; } 
		else {
			if(mysql_num_rows($chkEvent_res))
				echo "<td valign=\"center\" bgcolor='#00FF00'> 
		     	".$dayArray["mday"]."<br>"."</td>\n";  
			else
				echo "<td valign=\"center\" bgcolor='#FFFFFF'> 
		    	 ".$dayArray["mday"]."<br>"."</td>\n"; 
			
		} 
		

//		unset($event_title);

		$start += ADAY;
	//}
	}
}
echo "</tr></table>";
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