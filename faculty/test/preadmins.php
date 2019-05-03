<?php 
	include("../includes/functions.php");
	include("db.php");
	sec_session_start();
	$usr = $_GET['id'];
		$k = mysql_query("Select username from members where encemail = '$usr'");
	while($row = mysql_fetch_array($k)){
		$p = $row['username']; 
	}
	$k = mysql_query("Select * from preadm where id = (select username from members where encemail = '$usr')");
	while($row = mysql_fetch_array($k)){
		if(!empty($row['id'])){
			header("Location:general.php?id=$usr");
		}
	}

//   	$k = mysql_query("INSERT into contact values('$p', '$_POST[fname]', '$_POST[fatocc]', '$_POST[mname]', '$_POST[motocc]', '$_POST[hno]', '$_POST[street]', '$_POST[village]', '$_POST[dist]', '$_POST[state]', '$_POST[pin]', '$_POST[phno]', '$_POST[pstreet]', '$_POST[pvillage]', '$_POST[pdist]', '$_POST[pstate]', '$_POST[ppin]','$_POST[phone1]', '$_POST[phone2]', '$_POST[phone3]', '$_POST[email]')");
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
<table width = "900">
<th></th><th>Name of the institution</th><th>address of institution</th><th>Course Name</th><th>Year of joining</th><th>Year of Passing</th><th>Marks</th><th>%</th>
<tr><td>SSC</td>
<td><input type = "text" name = "secsch" /></td>
<td><input type = "text" name = "secadd" /></td>
<td><select name = "secboard" id = "secboard">
  <option value="SSC">SSC</option>
  <option value="CBSE">CBSE</option>
  <option value="ICSE">ICSE</option>
</select>
</td>
<td>
<select name = "secjoin" id = "secjoin">
<?php
	for($i = 2003; $i < date("Y"); $i++){
			echo "<option value = ".$i.">".$i."</option>";
	}
?>
</select>
</td>
<td>
<select name = "secpass" id = "secpass">
<?php
	for($i = 2004; $i < date("Y"); $i++){
			echo "<option value = ".$i.">".$i."</option>";
	}
?>
</select></td>
<td><input type = "text" name = "secmar" /></td>
<td><input type = "text" name = "secper" size="10" /></td>
</tr>
<tr><td>Inter</td>
<td><input type = "text" name = "twesch" /></td>
<td><input type = "text" name = "tweadd" /></td>
<td><select name = "tweboard" id = "tweboard">
  <option value="Intermediate">Intermediate</option>
  <option value="CBSE">CBSE</option>
  <option value="Diploma">Diploma</option>
</select>
</td>
<td>
<select name = "twejoin" id = "twejoin">
<?php
	for($i = 2004; $i < date("Y"); $i++){
			echo "<option value = ".$i.">".$i."</option>";
	}
?>
</select></td>
<td>
<select name = "twepass" id = "twepass">
<?php
	for($i = 2005; $i < date("Y"); $i++){
			echo "<option value = ".$i.">".$i."</option>";
	}
?>
</select></td>
<td><input type = "text" name = "twemar" /></td>
<td><input type = "text" name = "tweper" size = "10" /></td>
</tr>
</table>
If there is a gap between SSC and Intermediate, reason for gap: <input type = "text" name = "gapsscint"  size="120"/><br /><br />
If there is a gap between Intermediate and degree, reason for gap: <input type = "text" name = "gapintdeg" size="120"/><br /><br />
Name of qualifying exam:<select name = "qual" id = "qual">
  <option value="EAMCET">EAMCET</option>
  <option value="Other CET">Other CET</option>
  <option value="Diploma">Diploma</option>
  <option value="NRI quota">NRI quota</option>
</select><br /><br />
Rank in qualifying exam:<input type = "text" name = "rankqual" /><br /><br />
<input type = "submit" name = "submit2">
</form>
<?php
/*	if(isset($_POST['submit2'])){
    	$k = mysql_query("INSERT into preadmission(id, secboard, schname, secmark, sectot, secper, secstrtyr, secendyr, intboard, intclg, subjects, intmark, inttot, intper, intstrtyr, intendyr, qualname, rank) values('$_POST[id]', '$_POST[secboard]', '$_POST[schname]', '$_POST[secmark]', '$_POST[sectot]', '$_POST[secper]', '$_POST[secstrtyr]', '$_POST[secendyr]', '$_POST[intboard]', '$_POST[intclg]', '$_POST[subjects]', '$_POST[intmark]', '$_POST[inttot]', '$_POST[intper]', '$_POST[intstrtyr]', '$_POST[intendyr]', '$_POST[qualname]', '$_POST[rank]')");
echo "<a href = 'academic.php'>Click here</a>";
		}

*/
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