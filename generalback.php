<?php 
include("db.php");
include_once 'includes/functions.php';
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

<form action = "general.php" name = "placement" method="post">

<h2>General Details</h2>
<table width = "1200">
<tr><td>Id* :</td><td><input type="text" name = "id"></td></tr>
<tr><td>Last Name(surname)* :</td><td> <input type="text" name = "lname"></td></tr>
<tr><td>First Name* :</td><td><input type="text" name = "fname"></td></tr>
<tr><td>Middle Name* :</td><td><input type="text" name = "mname"></td></tr>
<tr><td>Branch* :</td><td>
<select name = "branch" id = "branch">
  <option value="CE">CE</option>
  <option value="EEE">EEE</option>
  <option value="ME">ME</option>
  <option value="ECE">ECE</option>
  <option value="CSE">CSE</option>
  <option value="BME">BME</option>
  <option value="IT">IT</option>
  <option value="BT">BT</option>
</select>
</td></tr>
<tr><td>Date of Birth* :</td><td><input type="date" name = "dob"></td></tr>
<tr><td>Gender* :</td><td>
<select name = "gen" id = "gen">
  <option value="M">Male</option>
  <option value="F">Female</option>
</select>
</td></tr>
<tr><td>Category* :</td><td><input type="text" name = "cat"></td></tr>
<tr><td>Entry Type* :</td><td>
<select name = "type" id = "type">
  <option value="R">Regular</option>
  <option value="L">Diploma</option>
</select>

</table>

<input type = "submit" name = "submit">
</form>
<?php
	if(isset($_POST['submit'])){
    	$k = mysql_query("INSERT into btech values('$_POST[id]', '$_POST[lname]', '$_POST[fname]', '$_POST[mname]', '$_POST[branch]', '$_POST[dob]', '$_POST[gen]', '$_POST[cat]', '$_POST[type]')");
	header("Location: contact.php");
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