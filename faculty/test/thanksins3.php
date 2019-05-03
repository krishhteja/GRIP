<?php 
echo $_POST['curyear'];
include("../includes/functions.php");
	include("db.php");
sec_session_start();
	$usr = $_GET['id'];
    	$k = mysql_query("INSERT into academics values('$_POST[id]', '$_POST[curyear]', '$_POST[section]', '$_POST[IyIsmar]', '$_POST[IyIsper]', '$_POST[IyIsbck]', '$_POST[IyIIsmar]', '$_POST[IyIIsper]', '$_POST[IyIIsbck]', '$_POST[IIyIsmar]', '$_POST[IIyIsper]', '$_POST[IIyIsbck]', '$_POST[IIyIIsmar]', '$_POST[IIyIIsper]', '$_POST[IIyIIsbck]', '$_POST[IIIyIsmar]', '$_POST[IIIyIsper]', '$_POST[IIIyIsbck]', '$_POST[IIIyIIsmar]', '$_POST[IIIyIIsper]', '$_POST[IIIyIIsbck]', '$_POST[IVyIsmar]', '$_POST[IVyIsper]', '$_POST[IVyIsbck]', '$_POST[IVyIIsmar]', '$_POST[IVyIIsper]', '$_POST[IVyIIsbck]')");
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
<body id="top">
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

Thanks for filling the form!!

<form action = "placement.php?id=<?php echo $_GET['id'] ?>" name = "placement" method="post">
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
<select name = "branch" id = "branch">
  <option value="M">Male</option>
  <option value="F">Female</option>
</select>
</td></tr>
<tr><td>Category* :</td><td><input type="text" name = "cat"></td></tr>
<tr><td>Entry Type* :</td><td>
<select name = "entry" id = "branch">
  <option value="R">Regular</option>
  <option value="L">Diploma</option>
</select>

</table>

<h2>Contact Details</h2>
<table width = "1200">
<tr><td>Father name* :</td><td> <input type = "text" name = "fname"></td></tr>
<tr><td>Father Occupation* :</td><td>
<select name = "fatocc" id = "fatocc">
  <option value="Govt. Employee">Govt. Employee</option>
  <option value="Own Business">Own Business</option>
  <option value="Pvt. Employee">Pvt. Employee</option>
</select>
<tr><td>Mother name* :</td><td> <input type = "text" name = "fname"></td></tr>
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
<tr><td>email* :</td><td><input type="text" name = "email"></td></tr>
</table>

<h2>Pre Admission Details</h2>
<table width = "1200">
<tr><td>SSC/CBSE/ICSE* :</td><td>
<select name = "secsch" id = "secsch">
  <option value="SSC">SSC</option>
  <option value="CBSE">CBSE</option>
  <option value="ICSE">ICSE</option>
</select>
</td></tr>
<tr><td>Total Marks* :</td><td><input type="text" name = "secmark"></td></tr>
<tr><td>Max. Marks* :</td><td><input type="text" name = "secmax"></td></tr>
<tr><td>Percentage* :</td><td><input type="text" name = "secper"></td></tr>
<tr><td>Start Year* :</td><td><input type ="month" name = "secstrt" /></td></tr>
<tr><td>End Year* :</td><td><input type="month" name = "secend"></td></tr>
</table>
<table width="1200">
<tr><td>CBSE/INTER/DIPLOMA* :</td><td>
<select name = "secsch" id = "secsch">
  <option value="CBSE">CBSE</option>
  <option value="INTERMEDIATE">Intermediate</option>
  <option value="DIPLOMA">Dimploma</option>
</select>
</td></tr>
<tr><td>subjects* :</td><td>
<select name = "subjs" id = "subjs">
  <option value="MPC">MPC</option>
  <option value="BPC">BPC</option>
  <option value="CSE">CSE</option>
  <option value="EEE">EEE</option>
  <option value="ME">ME</option>
  <option value="ECE">ECE</option>
</select>
</td></tr>
<tr><td>Total Marks* :</td><td><input type="text" name = "intmark"></td></tr>
<tr><td>Max. Marks* :</td><td><input type="text" name = "intmax"></td></tr>
<tr><td>Percentage* :</td><td><input type="text" name = "intper"></td></tr>
<tr><td>Start Year* :</td><td><input type="month" name = "intstrt"></td></tr>
<tr><td>End Year* :</td><td><input type="month" name = "intend"></td></tr>
<tr><td>Qualifying Exam* :</td><td>
<select name = "qualexam" id = "qualexam">
  <option value="EAMCET">EAMCET</option>
  <option value="Other CET">Other CET</option>
  <option value="NRI">NRI</option>
</select>
</td></tr>
<tr><td>Rank* :(in case of NRI, rank = -1)</td><td><input type="text" name = "rank"></td></tr>
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