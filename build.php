<?php 
/* include("../includes/functions.php");
	include("db.php");
sec_session_start();
	$usr = $_POST['id'];
	$a = "btech";
	$t = "grietstudentdetails";
	$k = mysql_query("Select * from btech where id = (select username from members where encemail = '$usr')");
	while($row = mysql_fetch_array($k)){
		if(!empty($row['id'])){
			header("Location:general.php?id=$usr");
		}
	} */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head>
<link rel="icon" href="images/grip.ico" type="image/x-icon">
<title>Resume Bulider </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imaPOSToolbar" content="no" />
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
    <?php /* if (login_check($mysqli) == true) : */?>
    <br class="clear" />
	  </div>
  </div>
  <!-- ####################################################################################################### -->
  <!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
<center><?php echo $_POST['lname']." ".$_POST['fname']." ".$_POST['mname']; ?></center>
<center><?php echo $_POST['hno'].", ".$_POST['street'].", ".$_POST['village']; ?></center>
<center><?php echo $_POST['mandal'].", ".$_POST['dist'].", ".$_POST['state'].", ".$_POST['pin']; ?></center>
<center><?php echo $_POST['mob'].", ".$_POST['email']; ?></center><br />
<hr />
<h4>Career Objectives</h4>
<?php echo $_POST['f1']; ?><br /><br />
<h4>Education</h4>
<table width = "1200">
<th></th><th>Name of the institution</th><th>address of institution</th><th>Course Name</th><th>Year of Passing</th><th>Percentage</th>
<tr><td>SSC</td>
<td><?php echo $_POST['secsch']; ?></td>
<td><?php echo $_POST['secadd']; ?></td>
<td><?php echo $_POST['secboard']; ?></td>
<td><?php echo $_POST['secpass']; ?></td>
<td><?php echo $_POST['secper']; ?></td>
</tr>
<tr><td>Inter</td>
<td><?php echo $_POST['twesch']; ?></td>
<td><?php echo $_POST['tweadd']; ?></td>
<td><?php echo $_POST['tweboard']; ?></td>
<td><?php echo $_POST['twepass']; ?></td>
<td><?php echo $_POST['tweper']; ?></td>
</tr>
<tr><td>Degree</td>
<td><?php echo $_POST['degsch']; ?></td>
<td><?php echo $_POST['degadd']; ?></td>
<td><?php echo $_POST['degcourse']; ?></td>
<td><?php echo $_POST['degpass']; ?></td>
<td><?php echo $_POST['per']; ?></td>
</tr>
</table>
<hr />
<h2>Special Training or Internships</h2>
<table width = "1200">
<th>Name and address of Instituition</th><th>Course Name</th><th>Duration Of course</th>
<tr>
<td><?php if(!empty($_POST['n1'])) echo $_POST['n1']; ?></td>
<td><?php if(!empty($_POST['c1'])) echo $_POST['c1']; ?></td>
<td><?php if(!empty($_POST['d1'])) echo $_POST['d1']; ?></td>
</tr>
<tr>
<td><?php if(!empty($_POST['n2'])) echo $_POST['n2']; ?></td>
<td><?php if(!empty($_POST['c2'])) echo $_POST['c2']; ?></td>
<td><?php if(!empty($_POST['d2'])) echo $_POST['d2']; ?></td>
</tr>
<tr>
<td><?php if(!empty($_POST['n3'])) echo $_POST['n3']; ?></td>
<td><?php if(!empty($_POST['c3'])) echo $_POST['c3']; ?></td>
<td><?php if(!empty($_POST['d3'])) echo $_POST['d3']; ?></td>
</tr>
<tr>
<td><?php if(!empty($_POST['n4'])) echo $_POST['n4']; ?></td>
<td><?php if(!empty($_POST['c4'])) echo $_POST['c4']; ?></td>
<td><?php if(!empty($_POST['d4'])) echo $_POST['d4']; ?></td>
</tr>
</table>
<hr />
<h4>Skills</h4>
<table width="800">
<tr>
<td><?php if(!empty($_POST['exp1'])) echo $_POST['exp1']; ?></td>
<td><?php if(!empty($_POST['exp2'])) echo $_POST['exp2']; ?></td>
</tr>
</table>
<h3>Work Experience</h3>
<table width = "1200">
<th>Name and address of Organization</th><th>From(date)</th><th>To(date)</th>
<tr>
<td><?php if(!empty($_POST['on1'])) echo $_POST['on1']; ?></td>
<td><?php if(!empty($_POST['fd1'])) echo $_POST['fd1']; ?></td>
<td><?php if(!empty($_POST['td1'])) echo $_POST['td1']; ?></td>
</tr>
<tr>
<td><?php if(!empty($_POST['on2'])) echo $_POST['on2']; ?></td>
<td><?php if(!empty($_POST['fd2'])) echo $_POST['fd2']; ?></td>
<td><?php if(!empty($_POST['td2'])) echo $_POST['td2']; ?></td>
</tr>
<tr>
<td><?php if(!empty($_POST['on3'])) echo $_POST['on3']; ?></td>
<td><?php if(!empty($_POST['fd3'])) echo $_POST['fd3']; ?></td>
<td><?php if(!empty($_POST['td3'])) echo $_POST['td3']; ?></td>
</tr>
<tr>
<td><?php if(!empty($_POST['on4'])) echo $_POST['on4']; ?></td>
<td><?php if(!empty($_POST['fd4'])) echo $_POST['fd4']; ?></td>
<td><?php if(!empty($_POST['td4'])) echo $_POST['td4']; ?></td>
</tr>
</table>
<hr />
<h4>Hobbies</h4>
<table width = "800">
<tr>
<td><?php if(!empty($_POST['hb1'])) echo $_POST['hb1']; ?></td></tr>
<tr><td><?php if(!empty($_POST['hb2'])) echo $_POST['hb2']; ?></td></tr>
<tr><td><?php if(!empty($_POST['hb3'])) echo $_POST['hb3']; ?></td></tr>
<tr><td><?php if(!empty($_POST['hb4'])) echo $_POST['hb5']; ?></td></tr>
<tr><td><?php if(!empty($_POST['hb5'])) echo $_POST['hb5']; ?></td></tr>
</tr>
</table>
<hr />
<h4>Reference</h4>
<table width = "800">
<tr>
<td><?php if(!empty($_POST['ref1'])) echo $_POST['ref1']; ?></td></tr>
<tr><td><?php if(!empty($_POST['ref2'])) echo $_POST['ref2']; ?></td>
</tr>
</table>
<hr />
Place: <?php echo $_POST['place']; ?><br />
Date: <?php echo $_POST['dat']; ?>
</div></div></div>



 <!-- ####################################################################################################### -->

       <div id="copyright">
    <p class="fl_left">Copyright &copy; <?php echo date("Y"); ?> - All Rights Reserved - <a href="developers.php">Dream World Team</a></p>
    <br class="clear" />
</div>  <!-- ####################################################################################################### -->
  <br class="clear" />
</div>
<?php /*else : */?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="../student.php">login</a>.
            </p>
        <?php /*endif; */?>
</body>
</html>