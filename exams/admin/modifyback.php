<?php 
	include("../includes/functions.php");
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
<form  action="assignd.html" method="POST" >
<input type = "text" name = "te">
<input type=submit name=s>
</form>
<?php
	if(isset($_POST['s'])){
?>
		<table border = '1'>
		<th>Date</th>
        <th>Forenoon session count</th>
        <th>Afternoon session count</th>
        
<?php
		for($i = 0; $i < $_POST['te']; $i++){
?>
			<tr>
            	<td><input type = "date" name = "date<?php echo $i ?>"></td>
                <td><input type = "text" name = "fore<?php echo $i ?>"></td>
                <td><input type = "text" name = "after<?php echo $i ?>"></td>
			</tr>
<?php			
		}
	}
?>
	<tr>
    	<td></td>
        <td><input type=submit value=submit name=test></td>
        <td></td>
	</tr>
</table>

<?php
   if (isset($_POST['test']))
{  
  //$month=$_POST['month'];
  //$dt=$_POST['dt'];
  //$year=$_POST['year'];
 // $t=$_POST['t'];
  for($j = 0; $j < $_POST['te']; $j++)
  {
  $date = $_POST['date'];//$year."-".$month."-".$dt;
  $fnvalue=$_POST['fore']; 
  $anvalue=$_POST['after'];
  
  //$n=1;
  //echo "<br>".$date." ".$fnvalue." ".$anvalue;
  if($date != 0){
	$con=mysql_connect("localhost","root","");
	mysql_select_db("deepu");
	//mysql_query("UPDATE TT SET date='date',anvalue='anvalue' ,fnvalue='fnvalue' WHERE sno='$n'");
    mysql_query("INSERT INTO TT(date,anvalue,fnvalue) VALUES('$date','$anvalue','$fnvalue')");
  //$n++;
  }
  }
	  header("Location: assignd.html");
  
}
?>

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