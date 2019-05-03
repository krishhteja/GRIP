<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
if(!empty($_SESSION['username'])){
	if($_SESSION['value'] == 's')
		header("Location:student/general.php");
	if($_SESSION['value'] == 'f')
		header("Location:faculty/general.php");
	if(($_SESSION['value'] == 'a') && (substr($_SESSION['username'], 0, 1) == 'a') == 1)
		header("Location:attendance/admin/index.php");
	if(($_SESSION['value'] == 'a') && (substr($_SESSION['username'], 0, 1) == 'a') == 0)
		header("Location:attendance/attendancemark.php");
}
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

        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        <link rel="stylesheet" href="styles/main.css" />
        <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
        <h1>Register with us</h1>
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
        <ul>
            <li>Usernames may contain only digits, upper and lower case letters and underscores</li>
            <li>Emails must have a valid email format</li>
            <li>Passwords must be at least 6 characters long</li>
            <li>Passwords must contain
                <ul>
                    <li>At least one upper case letter (A..Z)</li>
                    <li>At least one lower case letter (a..z)</li>
                    <li>At least one number (0..9)</li>
                </ul>
            </li>
            <li>Your password and confirmation must match exactly</li>
        </ul>
 
		<table width="1200">
        <form action="includes/register.inc.php" 
                method="post" 
                name="registration_form">
            <tr><td>Id:</td><td> <input type='text' 
                name='username' 
                id='username' /></td></tr><tr><td>
            Email: </td><td><input type="text" name="email" id="email" /></td></tr><tr>
            <td>Password:</td><td> <input type="password"
                             name="password" 
                             id="password"/></td></tr><tr>
            <td>Confirm password: </td><td><input type="password" 	
                                     name="confirmpwd" 
                                     id="confirmpwd" /></td></tr></table>
            <input type="button" 
                   value="Register" 
                   onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);" /> 
        </form>
        <p>Return to the <a href="student.php">login page</a>.</p>
        <p>Return to the <a href="attendance.php">Attendance page</a>.</p>
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