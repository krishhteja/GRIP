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
		<li class = "active"><a href="library.php">Library</a></li>
        <li><a href="finance.php">Finance</a></li>
        <li><a href="transport.php">Transport</a></li>
        <li><a href="ecc.php">ECC</a></li>
        <li><a href="acr.php">ACR</a></li>
        <li><a href="studentview.php">Students</a></li>
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

   <h3>Library:</h3> 
    <table width="900" align="center" cellpadding="2" border="0">
	<?php 
		echo "<th>Book id</th><th>Book name</th><th>Return date</th>";	
		$k = mysql_query("select * from libissueret where rollno =  (select username from members where encemail = '$usr')");
		while($row = mysql_fetch_array($k)){
					echo "<tr><td>".$row['accno']."</td><td>".$row['issuedate']."</td><td>".$row['returndate']."</td></tr>";
		}
	?></table> 
<?php
/*  echo "Issue Books:";
    echo "<table width="900" align="center" cellpadding="2" border="0">";
		echo "<th>Book id</th><th>Book name</th><th>Date of return</th>";	
		$k = mysql_query("select * from libissue where id =  (select username from members where encemail = '$usr')");
		while($row = mysql_fetch_array($k)){
			for($i = 1; $i < 8; $i++){
				$a = "issue".$i;
				$t = "name".$i;
				$p = "date".$i;
				if(!empty($row[$a]) || !empty($row[$t])){
					echo "<tr><td>".$row[$a]."</td><td>".$row[$t]."</td><td>".$row[$p]."</tr>";
				}
			}
		}
	*/?></table> 
    
						
		
	


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