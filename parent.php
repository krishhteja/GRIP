<?php 
include("db.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head>
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
</div>  </div>
  <!-- ####################################################################################################### -->
<!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
      <!-- ####################################################################################################### -->
      <div id="content">
       
  <!-- ####################################################################################################### -->
 <div id="latestnews">
<h3>Welcome Parents,</h3><br />

<h2>Gateway for Parents</h2><br />
<h2>Stay informed</h2><br />
 <img class="imgl" src="images/aca.jpg" alt="" width="125" height="125" />
<a href = "#">GRIET report</a><br /><br />
<a href = "#">Parent News archive</a><br /><br />
<br />
<h2><u>Undergraduate Academic Resources</u></h2><br />
A guide to undergraduatte academin programs, opportunities and services.<br /><br />
<a href = "#">Undergraduate Education</a><br />
<br />
<h2><u>Graduate Academic Resources</u></h2>
<br />
Academic programs and services for graduate students and postdoctoral scholars.<br /><br />
<a href = "#">Graduate Life</a><br /><br />
<a href = "#">Postdoctoral Affairs</a><br /><br />
<br />
<h2>Managing your Finance</h2><br />
Financial aid programs, paying your student bill and managing your finance.<br /><br />
 <img class="imgl" src="images/finance.jpg" alt="" width="90" height="90" />
<a href = "#">Financial Aid</a><br /><br />
<a href = "#">Student Financial Activities</a><br /><br />
<a href = "#">Scholarships</a><br /><br />
<br />
<h2>Beyond Campus</h2><br />
GRIET students have many opportunities to study and pursue academic interests in and away from the nest.<br /><br />
<a href = "#">Jobs</a><br /><br />
<a href = "#">Education Overseas</a><br /><br />
<a href = "#">Education in the country</a><br /><br />
</div></div>
 <!-- ####################################################################################################### -->
<div id="column">
        <div class="subnav">
Konnect with us to more about our services.<br /><br />
<a href = "student.php">Student</a>
<a href = "faculty.php">Faculty</a>
<a href = "parents.php">Parents</a>
<a href = "#">Visitors</a><br /><br />
<u>Konnect here!!!</u><br /><br />
        <table width="200" border="0" align="center" cellpadding="2" cellspacing="5">
      <form action = "index.php" name = "konnect" method = "POST">  
  <tr><td> </td><td></td></tr>
  <tr> <td width="116"><div align="right">Username</div></td>
    <td width="177"><input name="username" type="text" /></td>
  </tr>
  <tr>
    <td><div align="right">Password</div></td>
    <td><input name="password" type="text" /></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td><input name="con" type="submit" value="konnect" /></td>
  </tr>
  </form>
</table>
    </div>
<br class="clear" />
  </div>
</div>
</div>
</div>
 <!-- ####################################################################################################### -->

<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; <?php echo date("Y"); ?> - All Rights Reserved - <a href="developers.php
   ">GRIET</a></p>
    <br class="clear" />
</div>  <!-- ####################################################################################################### -->
  <br class="clear" />
</div>
</body>
</html>