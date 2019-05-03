<?php 
	include("../../includesexam/functions.php");
	sec_session_start();
	include("db.php");
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
     <?php include("griet.php"); 	
			echo "<br />";
			?>    
	  </div>
  </div>
  <!-- ####################################################################################################### -->

  <!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
  <form action="add.php" method="POST">
  <h4>Enter the details of the faculty to be added </h4><br>
  <h3>Name <input type="text" name="t1" size="20"/><br>
  Id <input type="text" name="t2" size="20"/><br>
  Designation 
  <select name="d">
	<option>Professor</option>
	<option>Associate Professor</option>
	<option>Asst.Professor</option></select><br>
  Mobile <input type="text" name="t4" size="20"/><br>
  email <input type="text" name="t5" size="20"/><br>
  
  Enter only branchcode <select name="v">
	<option>A01</option>
	<option>A02</option>
	<option>A03</option>
	<option>A04</option>
	<option>A05</option>
	<option>A11</option>
	<option>A12</option>
	<option>A23</option>
	<option>BS</option>
	<option>E00</option>
	<option>F00</option>
      <input type="submit" name="s"  /> <br> </h3>
	CE-A01 <br>
	MECH-A02 <br>
	EEE-A03 <br>
	ECE-A04 <br>
	CSE-A05 <br>
	BME-A11 <br>
	IT-A12 <br>
	BT-A23 <br>
	BS <br>
	MBA-E00 <br>
	MCA-F00 <br>
   
    </form>
  
 <?php if(isset($_POST['s'])){
  $n=$_POST['t1'];
  $i=$_POST['t2'];
  $de=$_POST['d'];
   if($de=='Asst.Professor')
     $dd=3;
   else if($de=='Associate Professor')
     $dd=2;
   else if($de=='Professor')
     $dd=1;
  $m=$_POST['t4'];
  $e=$_POST['t5'];
  //$dd=$_POST['t6'];
  $b=$_POST['v'];
  mysql_query("INSERT INTO `grietfaculty` (`name`, `id`, `deid`, `designation`, `branchcode`, `email` ) VALUES ('$n','$i','$dd','$de','$b','$e')");
 
// mysql_query("INSERT INTO `grietfaculty`.`facultylist1` (`sno`, `name`, `id`, `deid`, `designation`, `branchcode`, `countfn`, `countan`) VALUES (NULL,'$n','$i','$dd','$de','$b','0','0')");
header("Location: facultylist.php");
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
                <span class="error">You are not authorized to access this page.</span> Please <a href="../../examlogin.php">login</a>.
            </p>
        <?php endif; ?>

</body>
</html>

