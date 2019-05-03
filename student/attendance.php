<?php 
include("../includes/functions.php");
	sec_session_start();
include("db.php");
	$usr = $_SESSION['username'];
	
	$a = "btech";
	$t = "grietstudentdetails";
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
   <h3>Academic Details:</h3>
    <table width = "400">
	<tr><td><?php 
		$at = mysql_query("Select id from attendance where id = '$_SESSION[username]'");
		while($row = mysql_fetch_array($at)){
			$b = substr($row['id'], 5, 3);
		}
		$sn = mysql_query("select distinct subcode, date from attendance where dept = '$b' and year = (select curyear from academics where id = '$_SESSION[username]') and section = (select section from academics where id = '$_SESSION[username]') and id = '$_SESSION[username]'");
		
			echo "Attended : </td><td>";
			while($ab = mysql_fetch_array($sn)){
				echo $ab['subcode']." - ";
				echo $ab['date']."<br>";
			}
			echo"</td></tr>";
		$s = mysql_query("select distinct subcode, date from attendance where dept = '$b' and year = (select curyear from academics where id = '$_SESSION[username]') and section = (select section from academics where id = '$_SESSION[username]')");
			echo "<tr><td>Total num of classes conducted : </td><td>". mysql_num_rows($s)."</td></tr>"; 
			echo "<tr><td>Attendance % :</td><td> ". round((mysql_num_rows($sn)) * 100 / mysql_num_rows($s), 2). "</td></tr>";
			 
	?>
</td></tr></table>

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