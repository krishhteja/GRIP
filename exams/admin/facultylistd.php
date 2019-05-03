<html>
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
<table border = '1'>
		<th>ID</th>
        <th>Department</th>
        <th>Designation</th>
		<th>Name</th>
		<th>BranchCode</th>
		<th>  </th>
<?php
{
	
	include("db.php");
	$idat=mysql_query("SELECT * from grietfaculty");
	while($id = mysql_fetch_assoc($idat))
    { 
?>
<tr> 	 	
		<td><form action="delete.php" action="POST"><input type="submit" name="s" value="<?php echo $id['id'] ?>" /></form></td> 
		<?php if(isset($_POST['s'])){ 
		echo $id['id'];
		header("Location: delete.php");
		} ?>
		
		<td> <?php echo $id['deid'] ?> </td>
     <td> <?php echo $id['designation'] ?> </td>
	 <td> <?php echo $id['name'] ?> </td>
	 <td> <?php echo $id['branchcode'] ?> </td>
	 </tr>

     <?php  
	}
}
?>
</table>
<a href="facultylist.php" >Back</a> <br>
<a href="add.php" >Add faculty</a> <br>
<p id="demo"></p>

<form id="form1" name="form1" method="post" action="facultylistex.php">
click here
<label><input type="submit" name="getReport" id="getReport" style="border: solid 1px #E0451F; background:#E0451F; font-weight:bold; color:#FFF;" value="Get All Faculty List in Excel Format"></label>
</form>
<h4>PRESS CTRL+p TO PRINT</h4>
</form>

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
                <span class="error">You are not authorized to access this page.</span> Please <a href="../../examlogin.php">login</a>.
            </p>
        <?php endif; ?>

</body>
</html>


</html>