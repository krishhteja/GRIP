<?php 
include("../includes1/functions.php");
	include("db.php");
sec_session_start();
	$usr = $_SESSION['username'];
	$k = mysql_query("Select username from facmembers where encemail = '$usr'");
	while($row = mysql_fetch_array($k)){
		$p = $row['username'];
	}
	$a = mysql_query("Select * from facgen where id = $_SESSION['username']");
	while($row = mysql_fetch_array($a)){
		if(!empty($row['id'])){
			header("Location:general.php?id=$usr");
		}
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

<form action = "profileins.php" name = "placement" method="post">

<h2>General Details</h2>
<table width = "1200">
<tr><td>Id* :</td><td><input type="text" name = "id"></td></tr>
<tr><td>Last Name(surname)* :</td><td> <input type="text" name = "lname"></td></tr>
<tr><td>First Name* :</td><td><input type="text" name = "fname"></td></tr>
<tr><td>Middle Name* :</td><td><input type="text" name = "mname"></td></tr>
<tr><td>Date of Birth* :</td><td><input type="date" name = "dob"></td></tr>
<tr><td>Gender* :</td><td>
<select name = "gen" id = "gen">
  <option value="M">Male</option>
  <option value="F">Female</option>
</select>
</td></tr>
<tr><td>Spouse Name*:</td><td><input type="text" name = "sname"></td></tr>
<tr><td>Father Name*:</td><td><input type="text" name = "fatname"></td></tr>
<tr><td>Address</td><td></td></tr>
<tr><td>H.no.* : </td><td><input type="text" name = "hno"></td></tr>
<tr><td>Street* :</td><td><input type="text" name = "street"></td></tr>
<tr><td>Village* :</td><td><input type="text" name = "village"></td></tr>
<tr><td>District* :</td><td><input type="text" name = "dist"></td></tr>
<tr><td>State* :</td><td><input type="text" name = "state"></td></tr>
<tr><td>pincode* :</td><td><input type="text" name = "pin"></td></tr>
<tr><td>Mobile number :</td><td><input type="text" name = "phone1"></td></tr>
<tr><td>Land line number :</td><td><input type="text" name = "phone2"></td></tr>
<tr><td>email* :</td><td><input type="text" name = "email" size="50"></td></tr>
</table>


<input type = "submit" name = "submit">
</form>


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