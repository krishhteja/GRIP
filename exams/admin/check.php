<?php 
	include("../../includesexam/functions.php");
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
<div class="wrapper row2">
  <div class="rnd">
    <!-- ###### -->
    <div id="topnav">
      <ul><li><a href="final_report.php">PREVIOUS REPORTS</a></li>
        <li><a href="../../includesexam/logout.php">Logout</a></li>
      </ul>
	</div>        
    <!-- ###### -->
  </div>
</div>
  <!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
<form action="code.php" method="POST">
<?php
	include("db.php");
	$str=$_POST['textarea'];
	$ak=explode(",",$str);
	?>
	
	<table>
	<?php
	foreach($ak as $v){		
		$coufn=mysql_query("SELECT * FROM grietfaculty WHERE ID='$v'");
		$i = mysql_fetch_assoc($coufn);
		mysql_query("INSERT INTO `grietfaculty`.`facultylist1` (`sno`, `name`, `id`, `deid`, `designation`, `branchcode`, `countfn`, `countan`) VALUES (NULL,'$i[name]','$i[id]','$i[deid]','$i[designation]','$i[branchcode]','0','0')");
		?>
		<tr><td><?php echo "$i[name]"; ?></td><td><?php echo "$i[id]"; ?></td><td><?php echo "$i[designation]"; ?></td></tr>
		<?php
	}

	?>	
	
	<table>
	
	<td>ADD NUMBERS</td><td><input type="text" name="adding" value="00000"></td></tr>
	<tr><td>REMOVE NUMBERS</td><td><input type="text" name="remove" value="00000"></td></tr>
<tr><td>ENTER RATIO OF ASSISTANT:</td><td><input type="text" name="rast"></td></tr>
<tr><td>ENTER RATIO OF ASSOCIATE:</td><td><input type="text" name="rasc"></td></tr>
<tr><td>ENTER RATIO OF PROFFESOR:</td><td><input type="text" name="rp"></td></tr> 
<tr><td></td><td><input type="submit" name="submit"></td></tr> 
</table>
</form>

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
	
