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

<tr><td  align=left  >  

<html>
<form action="tableenter.php" method="post">
<?php
		if (isset($_POST['submit'])){
		$n=$_SESSION['no']=$_POST["noofdays"];
		for($i = 0; $i < $n; $i++){
		$s=$i+1;
		
		$d="date$i";
		$f="fore$i";
		$a="after$i";
		echo "date".$s;
		
?>
		<table border="2">
			<tr>
			    
            	<td>Date(IF USING BROWSER OTHER THAN CHROME ENTER DATE IN YYYY-MM-DD FROMAT)<input type = "date" name = "<?php echo $d ?>"></td>
                <td>Forenoon sessions<input type = "text" name = "<?php echo $f ?>"></td>
                <td>Afternoon sessions<input type = "text" name = "<?php echo $a ?>"></td>
				
			</tr>
			</table>
			<br>
		
<?php		
		}
		//echo $n."<br>";
	}
//echo $_SESSION['no'];
?>


<input type="submit" name="submit" value="submit">
</form>	
</html>

  </div>
  </div>
  </div>

 <!-- ####################################################################################################### -->

       <div id="copyright">
	   <br>
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