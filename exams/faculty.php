<?php 
	include("../includesexam/functions.php");
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
    <?php //if (login_check($mysqli) == true) : ?>
     <?php include("griet.php"); 	
			echo "<br />";
			?>    
	  </div>
  </div>
   <!-- ####################################################################################################### -->
    <!-- ###### -->
	
  <!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
    <form action=" faculty1.php" method="POST" >
    Enter faculty id<input type="text" name="f" size="10" />
    <input type=submit name=s  />
    </form>
	<?php
if (isset($_POST['s']))
{
	 
	 $fid=$_POST['f'];
//echo "mysql_query(SELECT * from assign where id='$fid')";
$idat=mysql_query("SELECT * from assign where id='$fid'");
?>
<table border=1>
<tr> <td> ID </td>
      <td> Day Number</td>
      <td> Date</td>
      <td> FN/AN </td>
       <td> Designation</td>
       <td> Department</td>
<?php
	while($id = mysql_fetch_assoc($idat))
  {
		?>
        <tr> <td><?php echo $id['id'] ?></td>
          <td><?php echo $id['dayno'] ?></td>
           <td><?php echo $id['date'] ?></td>
           <td><?php echo $id['fnoran'] ?></td>
           <td><?php echo $id['desg'] ?></td>
           <td><?php echo $id['dept'] ?></td>
           </tr>
<?php	
       }
	 
}
	?>

</tr>
</table>
<form action="final_report.php" method="post">
<input type="submit" name="s1" value="Back"/>
<h4>PRESS CTRL+p TO PRINT</h4>
</form>
<?php
if(isset($_POST['s1'])){
header("Location: final_report.php");
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
<?php /* else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="../examlogin.php">login</a>.
            </p>
        <?php endif;*/ ?>

</body>
</html>

