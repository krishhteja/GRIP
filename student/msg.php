<?php 
	include("../includes/functions.php");
	sec_session_start();
	include("db.php");
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
        <li><a href="general.php">General</a></li>
        <li><a href="preadm.php">Pre admission</a></li>
		<li><a href="academic.php">Academic</a></li>
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
		mysql_query("update notif set status = '1' where msgid = '$_GET[msgid]' and id = '$_SESSION[username]'");
	?>
    <table width="300">
    <tr><td><a href = "testmsg.php">Inbox</a></td><td><a href = "unreadmark.php?msgid=<?php echo $_GET['msgid'] ?>">Mark as unread</a></td></tr>
	<table width = "900">
	<?php		
		$a = mysql_query("SELECT * FROM notif WHERE msgid = '$_GET[msgid]' and id = '$_SESSION[username]'");
		while($row = mysql_fetch_array($a)){
			echo "<tr><td>From: </td><td>".$row['sentby']."</td></tr>";
			echo "<tr><td>To: </td><td>".$row['id']."</td></tr>";
			echo "<tr><td>Subject: </td><td>".$row['subject']."</td></tr>";			
			echo "<tr><td>Message: </td><td>".$row['msg']."</td></tr>";
		}
	?>
    </table>
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