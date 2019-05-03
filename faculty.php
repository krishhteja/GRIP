<?php
include_once 'includes1/db_connect.php';
include_once 'includes1/functions.php';
sec_session_start();
if(!empty($_SESSION['username'])){
	if(substr($_SESSION['username'], 0, 1) == 's')
		header("Location:student/general.php");
	if(substr($_SESSION['username'], 0, 1) == 'f')
		header("Location:faculty/general.php");
	if(substr($_SESSION['username'], 0, 2) == 'aa')
		header("Location:attendance/attendancemark.php");
	if(substr($_SESSION['username'], 0, 1) == 'a')
		header("Location:attendance/admin/adminmodi.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head>
<link rel="icon" href="images/grip.ico" type="image/x-icon">
<title>GRIP </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
        <link rel="stylesheet" href="styles/main.css" />
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper">
  <!-- ####################################################################################################### -->
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
     <?php 
	 	include("griet.php"); 
	 ?>
     
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
<h3>Welcome Faculty,</h3>
<h2><u>Faculty Resources</u></h2>
These offices and resources support GRIET faculty across the instituition.<br /><br />
<a href = "#">>Faculty Afairs</a><br /><br />
<a href = "#">>Research and Scholarship</a><br /><br />
<a href = "#">>Development and Diversity</a><br /><br />
<a href = "#">>Faculty financial activities</a><br /><br />
<br />
<h2><u>Staff Resources </u></h2>
These administrative offices and resources suppory GRIET staff in their work.<br /><br />
<a href = "#">>Administrative Policies</a><br /><br />
<a href = "#">>Administrative Offices</a><br /><br />
<a href = "#">>Research Administration</a><br /><br />
<a href = "#">>New Employee Guide</a><br /><br />
<a href = "#">>Financial Activities</a><br /><br />
<br />
<h2><u>Teaching Resources</u></h2>
Offices and resources that support teaching enterprise at GRIET<br /><br />
<a href = "#">>Academic Calender</a><br /><br />
<a href = "#">>GRIET Bulletin</a><br /><br />
<a href = "#">>Center for teaching and Learning</a><br /><br />
<br />
<h2><u>Libraries and Academin Computing</u></h2>
Library and technology resources for research and the classroom.<br /><br />
<a href = "#">>GRIET library</a><br /><br />
<a href = "#">>Technology for Courses</a><br /><br />
<a href = "#">>CourseWork</a><br /><br />
<br />
<h2><u>Staff Training</u></h2>
Career development, training programs, and tuition assistance benifits for GRIET staff<br /><br />
<a href = "#">>Training guide</a><br /><br />
<a href = "#">>Educational Assistance</a><br /><br />
<a href = "#">>Technology Training</a><br /><br />
<br />
<h2><u>Work Life</u></h2>
Resources to support faculty and staff in reaching a comfortable balance in their work, presonal and family lives.<br /><br />
<a href = "#">>WorkLife</a><br /><br />
<a href = "#">>Help Center</a><br /><br />
<a href = "#">>Diversities and Access</a><br /><br />
</div></div>
 <!-- ####################################################################################################### -->
<div id="column">
        <div class="subnav">
konekt with us to know more about our services.<br /><br />
<a href = "student.php">Student</a>
<a href = "faculty.php">Faculty</a>
<a href = "parents.php">Parents</a>
<a href = "#">Visitors</a><br /><br />
<u>konekt here!!!</u><br /><br />
<table width="200" border="0" align="center" cellpadding="2" cellspacing="5">
    <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
	?> 
        <form action="includes1/process_login.php" method="post" name="login_form">                  
           
<tr><td> Id:</td><td> <input type="text" name="email" /></td></tr>
<tr><td>            Password: </td><td><input type="password" 
                             name="password" 
				id = "password"/></td></tr>
<tr><td></td><td>            <input type="submit" 
                   value="Login" 
                 
  onclick="formhash(this.form, this.form.password);"/> </td></tr>
        </form>
</table>
    </div>
<br class="clear" />
  </div></div>
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