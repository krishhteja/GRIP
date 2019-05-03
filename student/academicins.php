<?php 
include("../includes/functions.php");
sec_session_start();
		$_SESSION['username'] = substr($email, 1, 12);
	include("db.php");
	
    	$k = mysql_query("Select username from members where encemail = '$usr'");
	while($row = mysql_fetch_array($k)){
		$p = $row['username'];
	}
	
    	$kpat = mysql_query("INSERT into preadm values('$p', '$_POST[secsch]', '$_POST[secadd]', '$_POST[secboard]', '$_POST[secjoin]', '$_POST[secpass]', '$_POST[secmar]', '$_POST[secper]', '$_POST[twesch]', '$_POST[tweadd]', '$_POST[tweboard]', '$_POST[twejoin]', '$_POST[twepass]', '$_POST[twemar]', '$_POST[tweper]', '$_POST[gapsscint]', '$_POST[gapintdeg]', '$_POST[qual]', '$_POST[rankqual]')");
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
     <?php include("griet.php"); ?>
    <br class="clear" />
	  </div>
  </div>
  <!-- ####################################################################################################### -->
  <!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
        <script type="text/JavaScript" src="js/forms.js"></script>

<form action = "thanksins.php?id=<?php echo $_GET['id'] ?>" name = "academic" method="post">

<h2>Academic Details</h2>
<table width = "200">
<tr><td>Current year* :</td><td> 
<select name = "curyear" id = "curyear">
  <option value="I">I</option>
  <option value="II">II</option>
  <option value="III">III</option>
  <option value="IV">IV</option>
</select>
</td></tr>
<tr><td>Section* :</td><td>
<select name = "section" id = "section">
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="D">D</option>
</select>
</td></tr></table>
<table width = "900">
<th>Year</th><th>Marks</th><th>Percentage</th><th>Backlogs</th>
<tr>
<td>Iy-Is</td><td><input type = "text" name = "IyIsmar" /></td><td><input type="text" name="IyIsper" /></td><td><input type="text" name="IyIsbck" /></td></tr>
<td>Iy-IIs</td><td><input type = "text" name = "IyIIsmar" /></td><td><input type="text" name="IyIIsper" /></td><td><input type="text" name="IyIIsbck" /></td></tr>
<td>IIy-Is</td><td><input type = "text" name = "IIyIsmar" /></td><td><input type="text" name="IIyIsper" /></td><td><input type="text" name="IIyIsbck" /></td></tr>
<td>IIy-IIs</td><td><input type = "text" name = "IIyIIsmar" /></td><td><input type="text" name="IIyIIsper" /></td><td><input type="text" name="IIyIIsbck" /></td></tr>
<td>IIIy-Is</td><td><input type = "text" name = "IIIyIsmar" /></td><td><input type="text" name="IIIyIsper" /></td><td><input type="text" name="IIIyIsbck" /></td></tr>
<td>IIIy-IIs</td><td><input type = "text" name = "IIIyIIsmar" /></td><td><input type="text" name="IIIyIIsper" /></td><td><input type="text" name="IIIyIIsbck" /></td></tr>
<td>IVy-Is</td><td><input type = "text" name = "IVyIsmar" /></td><td><input type="text" name="IVyIsper" /></td><td><input type="text" name="IVyIsbck" /></td></tr>
<td>IVy-IIs</td><td><input type = "text" name = "IVyIIsmar" /></td><td><input type="text" name="IVyIIsper" /></td><td><input type="text" name="IVyIIsbck" /></td></tr>
</table>

<input type = "submit" name = "submit3" />
</form>
<?php
	if(isset($_POST['submit3'])){
    	$k = mysql_query("INSERT into academics values('$_POST[id]', '$_POST[curyear]', '$_POST[section]', '$_POST[IyIsmar]', '$_POST[IyIsper]', '$_POST[IyIsbck]', '$_POST[IyIIsmar]', '$_POST[IyIIsper]', '$_POST[IyIIsbck]', '$_POST[IIyIsmar]', '$_POST[IIyIsper]', '$_POST[IIyIsbck]', '$_POST[IIyIIsmar]', '$_POST[IIyIIsper]', '$_POST[IIyIIsbck]', '$_POST[IIIyIsmar]', '$_POST[IIIyIsper]', '$_POST[IIIyIsbck]', '$_POST[IIIyIIsmar]', '$_POST[IIIyIIsper]', '$_POST[IIIyIIsbck]', '$_POST[IVyIsmar]', '$_POST[IVyIsper]', '$_POST[IVyIsbck]', '$_POST[IVyIIsmar]', '$_POST[IVyIIsper]', '$_POST[IVyIIsbck]')");
	header("Location: thanks.php?id=$_GET'[id]'");
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
                <span class="error">You are not authorized to access this page.</span> Please <a href="../student.php">login</a>.
            </p>
        <?php endif; ?>
</body>
</html>