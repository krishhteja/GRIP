<?php 
	include("../../includesatten/functions.php");
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
  <script>
  var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
    window.location.href = uri + base64(format(template, ctx))
  }
})()
</script>
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
</head>
<body id="top" oncontextmenu="return false">
<div class="wrapper">
  <!-- ####################################################################################################### -->
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
    <?php if (login_check($mysqli) == true) : ?>
	  </div>
  </div>
  <!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div class="rnd">
    <!-- ###### -->
    <div id="topnav">
      <ul><li><a href="report.php">Report</a></li>
        <li><a href="updatepwd.php">Change Password</a></li>
        <li><a href="attenmodi.php">Modify</a></li>
		<li><a href="status.php">Status</a></li>
		<li><a href="timetable.php">Timetable</a></li>
        <li><a href="../../includesatten/logout.php">Logout</a></li>
	</div>        
    <!-- ###### -->
  </div>
</div>
  <!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
<input type="button" border = '2' onclick="tableToExcel('testTable', 'W3C Example Table')" value="Export to Excel">
<table id="testTable" summary="Code page support in different versions of MS Windows." rules="groups" frame="hsides" border="2"><?php
	$stud = mysql_query("select id from academicyear where coursecode = '$_POST[dept]' and curyear = '$_POST[year]' and section = '$_POST[section]'");
	$subj = mysql_query("select distinct subject from timetable where code = '$_POST[dept]' and section = '$_POST[section]' and year = '$_POST[year]'");
	echo "<th></th>";
	while($sub = mysql_fetch_array($subj)){
		echo "<th>".$sub['subject']."</th>";		
	}
	echo "<tr><td></td>";
	for($j = 0; $j < mysql_num_rows($subj); $j++){
		mysql_data_seek($subj, $j);
		$rep_subj = mysql_fetch_assoc($subj);
		$conducted = mysql_query("select sum(count_mins) as classes from attendance_reference where subject = '$rep_subj[subject]' and year = '$_POST[year]' and dept = '$_POST[dept]' and section = '$_POST[section]' and date between '$_POST[from_date]' and '$_POST[to_date]'");			
		while($repfinal = mysql_fetch_array($conducted)){
			$cond = $repfinal['classes']; 
			echo "<td>".$cond."</td>";
		}
	}
	echo "</tr>";
	for($i = 0; $i < mysql_num_rows($stud); $i++){
		mysql_data_seek($stud, $i);
		$rep_stud = mysql_fetch_assoc($stud);
		echo "<tr><td>".$rep_stud['id']."</td>";
		for($j = 0; $j < mysql_num_rows($subj); $j++){
			mysql_data_seek($subj, $j);
			$rep_subj = mysql_fetch_assoc($subj);
			$report = mysql_query("select sum(count) as classes from attendance where id = '$rep_stud[id]' and subcode = '$rep_subj[subject]' and date between '$_POST[from_date]' and '$_POST[to_date]'");
			while($repfinal = mysql_fetch_array($report)){
				$cond = $repfinal['classes']; 
				echo "<td>".$cond."</td>";
			}
		}
		echo "</tr>";
	}
?>
</table>
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