<?php 
include("db.php");
sec_session_start();
include_once 'includes/functions.php';
    	$k = mysql_query("INSERT into facgen values('$_POST[id]', '$_POST[lname]', '$_POST[fname]', '$_POST[mname]',  '$_POST[dob]', '$_POST[gen]', '$_POST[sname]', '$_POST[hno]', '$_POST[street]', '$_POST[village]', '$_POST[dist]', '$_POST[state]', '$_POST[pin]', '$_POST[phone1]', '$_POST[phone2]', '$_POST[email]')");

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

<form action = "facthanksins.php" name = "placement" method="post">

<h2>Qualification Details</h2>
<table width = "1200">
<tr><td>Id* :</td><td><input type="text" name = "id"></td></tr>
<tr><td>Qualification :</td><td><input type="text" name = "qual"></td></tr>
<tr><td>Designation* :</td><td>
<select name = "desig" id = "desig">
  <option value="pro">Professor</option>
  <option value="asp">Associate Professor</option>
  <option value="astp">Assistant Professor</option>
  <option value="nts">Non Teaching Staff</option>
</select>
</td></tr>
<tr><td>Papers Published :</td><td><input type="text" name = "pp1" size="50"></td></tr>
<tr><td></td><td><input type="text" name = "pp2" size="50"></td></tr>
<tr><td></td><td><input type="text" name = "pp3" size="50"></td></tr>
<tr><td></td><td><input type="text" name = "pp4" size="50"></td></tr>
<tr><td></td><td><input type="text" name = "pp5" size="50"></td></tr>
</table>
<input type = "submit" name = "submit">
</form>
<?php
if(isset($_POST['submit'])){
    	$k = mysql_query("INSERT into facgen values('$_POST[id]', '$_POST[lname]', '$_POST[fname]', '$_POST[mname]',  '$_POST[dob]', '$_POST[gen]', '$_POST[sname]', '$_POST[hno]', '$_POST[street]', '$_POST[village]', '$_POST[dist]', '$_POST[state]', '$_POST[pin]', '$_POST[phone1]', '$_POST[phone2]', '$_POST[email]')");
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
</body>
</html>