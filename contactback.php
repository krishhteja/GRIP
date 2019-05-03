<?php 
include("db.php");
include("includes/functions.php");
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
<body id="top">
<div class="wrapper">
  <!-- ####################################################################################################### -->
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
     <?php include("griet.php"); ?>
    <br class="clear" />
	  </div>
  </div>
  <!-- ####################################################################################################### -->
  <!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">

<form action = "contact.php" name = "contact" method="post">

<h2>Contact Details</h2>
<table width = "1200">
<tr><td>Id* :</td><td> <input type = "text" name = "id"></td></tr>
<tr><td>Father name* :</td><td> <input type = "text" name = "fname"></td></tr>
<tr><td>Father Occupation* :</td><td>
<select name = "fatocc" id = "fatocc">
  <option value="Govt. Employee">Govt. Employee</option>
  <option value="Own Business">Own Business</option>
  <option value="Pvt. Employee">Pvt. Employee</option>
</select>
<tr><td>Mother name* :</td><td> <input type = "text" name = "mname"></td></tr>
<tr><td>Mother Occupation* :</td><td>
<select name = "motocc" id = "motocc">
  <option value="Govt. Employee">Govt. Employee</option>
  <option value="Own Business">Own Business</option>
  <option value="Pvt. Employee">Pvt. Employee</option>
  <option value="Home Maker">Home Maker</option>
</select>
</td></tr>
<tr><td>Address</td><td></td></tr>
<tr><td>H.no.* : </td><td><input type="text" name = "hno"></td></tr>
<tr><td>Street* :</td><td><input type="text" name = "street"></td></tr>
<tr><td>Village* :</td><td><input type="text" name = "village"></td></tr>
<tr><td>District* :</td><td><input type="text" name = "dist"></td></tr>
<tr><td>State* :</td><td><input type="text" name = "state"></td></tr>
<tr><td>pincode* :</td><td><input type="text" name = "pin"></td></tr>
<tr><td>Student Mobile number* :</td><td><input type="text" name = "phone1"></td></tr>
<tr><td>Father Mobile number* :</td><td><input type="text" name = "phone2"></td></tr>
<tr><td>Land line number :</td><td><input type="text" name = "phone3"></td></tr>
<tr><td>email* :</td><td><input type="text" name = "email" size="50"></td></tr>
</table>

<input type = "submit" name = "submit1">
</form>
<?php
	if(isset($_POST['submit1'])){
    	$k = mysql_query("INSERT into contact values('$_POST[id]', '$_POST[fname]', '$_POST[fatocc]', '$_POST[mname]', '$_POST[motocc]', '$_POST[hno]', '$_POST[street]', '$_POST[village]', '$_POST[dist]', '$_POST[state]', '$_POST[pin]', '$_POST[phone1]', '$_POST[phone2]', '$_POST[phone3]', '$_POST[email]')");
	header("Location: preadm.php");
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