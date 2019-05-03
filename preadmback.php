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

<form action = "preadm.php" name = "preadm" method="post">

<h2>Pre Admission Details</h2>
<table width = "1200">
<tr><td>Id*: </td><td><input type = "text" name = "id" /></td></tr>
<tr><td>SSC/CBSE/ICSE* :</td><td>
<select name = "secsch" id = "secboard">
  <option value="SSC">SSC</option>
  <option value="CBSE">CBSE</option>
  <option value="ICSE">ICSE</option>
</select>
</td></tr>
<tr><td>School Name* :</td><td><input type="text" name = "schname"></td></tr>
<tr><td>Total Marks* :</td><td><input type="text" name = "secmark"></td></tr>
<tr><td>Max. Marks* :</td><td><input type="text" name = "sectot"></td></tr>
<tr><td>Percentage* :</td><td><input type="text" name = "secper"></td></tr>
<tr><td>Start Year* :</td><td><input type ="date" name = "secstrtyr" /></td></tr>
<tr><td>End Year* :</td><td><input type="date" name = "secendyr"></td></tr>
</table>
<table width="1200">
<tr><td>CBSE/INTER/DIPLOMA* :</td><td>
<select name = "intboard" id = "intboard">
  <option value="CBSE">CBSE</option>
  <option value="INTERMEDIATE">Intermediate</option>
  <option value="DIPLOMA">Dimploma</option>
</select>
</td></tr>
<tr><td>College Name* :</td><td><input type="text" name = "intclg"></td></tr>
<tr><td>subjects* :</td><td>
<select name = "subjs" id = "subjects">
  <option value="MPC">MPC</option>
  <option value="BPC">BPC</option>
  <option value="CSE">CSE</option>
  <option value="EEE">EEE</option>
  <option value="ME">ME</option>
  <option value="ECE">ECE</option>
</select>
</td></tr>
<tr><td>Total Marks* :</td><td><input type="text" name = "intmark"></td></tr>
<tr><td>Max. Marks* :</td><td><input type="text" name = "inttot"></td></tr>
<tr><td>Percentage* :</td><td><input type="text" name = "intper"></td></tr>
<tr><td>Start Year* :</td><td><input type="date" name = "intstrtyr"></td></tr>
<tr><td>End Year* :</td><td><input type="date" name = "intendyr"></td></tr>
<tr><td>Qualifying Exam* :</td><td>
<select name = "qualexam" id = "qualname">
  <option value="EAMCET">EAMCET</option>
  <option value="Other CET">Other CET</option>
  <option value="NRI">NRI</option>
</select>
</td></tr>
<tr><td>Rank* :(in case of NRI, rank = -1)</td><td><input type="text" name = "rank"></td></tr>
</table>
<input type = "submit" name = "submit2">
</form>
<?php
	if(isset($_POST['submit2'])){
    	$k = mysql_query("INSERT into preadmission(id, secboard, schname, secmark, sectot, secper, secstrtyr, secendyr, intboard, intclg, subjects, intmark, inttot, intper, intstrtyr, intendyr, qualname, rank) values('$_POST[id]', '$_POST[secboard]', '$_POST[schname]', '$_POST[secmark]', '$_POST[sectot]', '$_POST[secper]', '$_POST[secstrtyr]', '$_POST[secendyr]', '$_POST[intboard]', '$_POST[intclg]', '$_POST[subjects]', '$_POST[intmark]', '$_POST[inttot]', '$_POST[intper]', '$_POST[intstrtyr]', '$_POST[intendyr]', '$_POST[qualname]', '$_POST[rank]')");
	header("Location:academic.php");
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