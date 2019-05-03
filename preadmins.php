<?php 
include("../includes/functions.php");
	include("db.php");
sec_session_start();
	$usr = $_GET['id'];
    	$k = mysql_query("INSERT into contact values('$_POST[id]', '$_POST[fname]', '$_POST[fatocc]', '$_POST[mname]', '$_POST[motocc]', '$_POST[hno]', '$_POST[street]', '$_POST[village]', '$_POST[dist]', '$_POST[state]', '$_POST[pin]', '$_POST[phno]', '$_POST[pstreet]', '$_POST[pvillage]', '$_POST[pdist]', '$_POST[pstate]', '$_POST[ppin]','$_POST[phone1]', '$_POST[phone2]', '$_POST[phone3]', '$_POST[email]')");
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

<form action = "academicins.php?id=<?php echo $_GET['id'] ?>" name = "preadm" method="post">

<h2>Pre Admission Details</h2>
<table width = "1200">
<tr><td>Id*: </td><td><input type = "text" name = "id" /></td></tr>
<tr><td>SSC/CBSE/ICSE* :</td><td>
<select name = "secboard" id = "secboard">
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
<select name = "subjects" id = "subjects">
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
<select name = "qualname" id = "qualname">
  <option value="EAMCET">EAMCET</option>
  <option value="ECET">ECET</option>
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
echo "<a href = 'academic.php'>Click here</a>";
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