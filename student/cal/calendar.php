<?php
include "../db.php";

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
<h4 align="center"><a href = "../index.php">Logout</a><br>

<h3 align="center">Select an year and a month</h3>
<form method="post" action="calendar.php">
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
for ($x=2000; $x<=2015; $x++){
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
	} else {
		$chkEvent_sql = "SELECT event_title FROM calendar_events WHERE user = '".$_GET['id']."' and month(event_start) = '".$month."' AND dayofmonth(event_start) = '".$dayArray["mday"]."' AND year(event_start) = '".$year."' ORDER BY event_start";
		$chkEvent_res = mysql_query($chkEvent_sql, $mysql) or die(mysql_error($mysql));

		if (mysql_num_rows($chkEvent_res) > 0) {
			$event_title = "<br/>";
			while ($ev = mysql_fetch_array($chkEvent_res)) {
				$event_title .= stripslashes($ev["event_title"])."<br/>";
			}
			mysql_free_result($chkEvent_res);
		} else {
			$event_title = "";
		}
if ($dayArray["mday"]==date("d")&&$month==date("d")) {
	    echo "<td style=\"background-color: #333333; text-align: center;\">
	     <A HREF=\"javascript:popUp('event.php?id=".$_GET['id']."m=".$month."&d=".$dayArray["mday"]."&y=$year')\">".$dayArray["mday"]."</A><br>".$event_title."</td>\n"; } 
		  else {
		echo "<td valign=\"center\"><A HREF=\"javascript:popUp('event.php?id=".$_GET['id']."&m=".$month."&d=".$dayArray["mday"]."&y=$year.')\">".$dayArray["mday"]."</A><br>".$event_title."</td>\n"; }


		unset($event_title);

		$start += ADAY;
	}
}
echo "</tr></table>";
mysql_close($mysql);
?>

</body>
</html>


