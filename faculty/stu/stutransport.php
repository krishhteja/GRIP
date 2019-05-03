<?php 
	include("../../includes1/functions.php");
	sec_session_start();
	include("../db.php");
	$a = "btech1";
	$t = "grietstudentdetails";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head>
<link rel="icon" href="../images/grip.ico" type="image/x-icon">
<title>GRIP </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="../styles/layout.css" type="text/css" />
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
     <?php include("../griet.php"); 	
			echo "<br />";
	include("stutemp.php");
			?>    
  			  </div>
  </div>
  <!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div class="rnd">
    <!-- ###### -->
    <div id="topnav">
      <ul>
        <li><a href="stugeneral.php?student=<?php echo $_GET['student'] ?>">General</a></li>
        <li><a href="stupreadm.php?student=<?php echo $_GET['student'] ?>">Pre admission</a></li>
		<li><a href="stuacademic.php?student=<?php echo $_GET['student'] ?>">Academic</a></li>
        <li><a href="stufinance.php?student=<?php echo $_GET['student'] ?>">Finance</a></li>
		<li><a href="stulibrary.php?student=<?php echo $_GET['student'] ?>">Library</a></li>
        <li class="active"><a href="stutransport.php?student=<?php echo $_GET['student'] ?>">Transport</a></li>
        <li><a href="stuextracur.php?student=<?php echo $_GET['student'] ?>">Extra Curricular</a></li></ul>
	</div>        
    <!-- ###### -->
  </div>
</div>
  <!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
    <?php
		$k = mysql_query("select count(*) from transport where rollno = '$_SESSION[username]'");
		while($row1 = mysql_fetch_array($k)) {
		
	?>

   <h3>Transport:</h3> 
	Means of transport:
	<?php 
		if($row1['count(*)']==0) 
			echo " General Bus"; 
		else if($row1['count(*)']!=0){
			$l = mysql_query("select * from transport where rollno = '$_SESSION[username]'"); 
			while($row = mysql_fetch_array($l)){ 
				echo "Route: ".$row['route']."<br /><br />"; 
    			echo "Stop: ". $row['stop'];
			}
		}
		}
		?>

  </div>
  </div>
  </div>

 <!-- ####################################################################################################### -->

       <div id="copyright">
    <p class="fl_left">Copyright &copy; <?php echo date("Y"); ?> - All Rights Reserved - <a href="../developers.php">GRIET</a></p>
    <br class="clear" />
</div>  <!-- ####################################################################################################### -->
  <br class="clear" />
</div>
<?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="../../student.php">login</a>.
            </p>
        <?php endif; ?>

</body>
</html>