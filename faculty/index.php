<?php 
	include("db.php");
	include("../includes1/functions.php");
	$a = "btech";
	$t = "grietstudentdetails";
	$usr = $_GET['id'];
	$k = mysql_query("Select username from members where encemail = '$usr'");
	while($row = mysql_fetch_array($k)){
		$p = $row['username'];
	}
	
	sec_session_start();
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
   {
     return false;    
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
        <li><a href="general.php?id=<?php echo $_GET['id'] ?>">Profile</a></li>
		<li><a href="library.php?id=<?php echo $_GET['id'] ?>">Library</a></li>
        <li><a href="finance.php?id=<?php echo $_GET['id'] ?>">Finance</a></li>
        <li><a href="transport.php?id=<?php echo $_GET['id'] ?>">Transport</a></li>
        <li><a href="ecc.php?id=<?php echo $_GET['id'] ?>">ECC</a></li>
        <li><a href="acr.php?id=<?php echo $_GET['id'] ?>">ACR</a></li>
        <li><a href="notif.php?id=<?php echo $_GET['id'] ?>">Message to Students</a></li>
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

   <h3>Notifications:</h3> 
<marquee direction="up" onmouseover="stop()" onmouseout="start()" scrollamount = "3">
		<?php		
			$a = mysql_query("SELECT * FROM notif WHERE id = (Select username from members where encemail = '$usr')");
			while($row = mysql_fetch_array($a)){
				echo "<hr>".$row['msg']."</hr>";
			}

		?>
  </marquee>
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
                <span class="error">You are not authorized to access this page.</span><br /><br /> Please <a href="../student.php">login</a>.
            </p>
        <?php endif; ?>
</body>
</html>