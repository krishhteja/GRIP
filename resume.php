<?php 
/* include("../includes/functions.php");
	include("db.php");
sec_session_start();
	$usr = $_GET['id'];
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
    <?php /* if (login_check($mysqli) == true) : */?>
    <br class="clear" />
	  </div>
  </div>
  <!-- ####################################################################################################### -->
  <!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">

<form action = "build.php" name = "resume.php" method="post">

<h2>General Details</h2>
<table width = "1200">
<tr><td>Last Name(surname)* :</td><td> <input type="text" name = "lname"></td></tr>
<tr><td>First Name* :</td><td><input type="text" name = "fname"></td></tr>
<tr><td>Middle Name* :</td><td><input type="text" name = "mname"></td></tr>
<tr><td>Father Name* :</td><td><input type="text" name = "fatname"></td></tr>

<tr><td>Date of Birth* :</td><td><input type="date" name = "dob"></td></tr>
<tr><td>Gender* :</td><td>
<select name = "gen" id = "gen">
  <option value="M">Male</option>
  <option value="F">Female</option>
</select>
</td></tr>
</table>
<hr />
<h3>Career Objectives:</h3>
<input type="radio" name="f1" value="To acquire a demanding position as a Management Trainee with HSBC utilizing accounting skills and business education to provide the best level of support to organization">To acquire a demanding position as a Management Trainee with HSBC utilizing accounting skills and business education to provide the best level of support to organization<br>
<input type="radio" name="f1" value="A position as a Human Resources Intern utilizing and expanding relevant education while providing exceptional HR skills, knowledge and capabilities.">A position as a Human Resources Intern utilizing and expanding relevant education while providing exceptional HR skills, knowledge and capabilities.<br />
<input type = "radio" name = "f1" value = "Fresh, hardworking, detail oriented team player in quest of a sales position with a renowned company on lasting basis." />Fresh, hardworking, detail oriented team player in quest of a sales position with a renowned company on lasting basis.<br />
<input type = "radio" name = "f1" value = "An able, keen, skilled, and trustworthy individual seeking a computer technician position. Bringing strong computer skills, and personal attributes including devotion, meeting goals, inventiveness, and the aptitude to follow through." />An able, keen, skilled, and trustworthy individual seeking a computer technician position. Bringing strong computer skills, and personal attributes including devotion, meeting goals, inventiveness, and the aptitude to follow through.<br />
<input type = "radio" name = "f1" value = "To obtain a new business development position by adding worth through utilizing my superior understanding, prospecting and selling abilities in the business to business field." />To obtain a new business development position by adding worth through utilizing my superior understanding, prospecting and selling abilities in the business to business field.<br />
<input type = "radio" name = "f1" value = "To get hold of a challenging career in retail with ABC company. Offering proven selling skills and exceptional customer service capabilities to contribute to the mission of company" />To get hold of a challenging career in retail with ABC company. Offering proven selling skills and exceptional customer service capabilities to contribute to the mission of company<br />
<input type = "radio" name = "f1" value = "To contribute as a team member in a lively work environment focused on promoting business growth by providing better worth and service" />To contribute as a team member in a lively work environment focused on promoting business growth by providing better worth and service<br />
<input type = "radio" name = "f1" value = "Expand management responsibilities, perk up organizational ability to go beyond corporate goals, and assist honor all long-standing commitments made to customers, stockholders, workers and the communities in which we live." />Expand management responsibilities, perk up organizational ability to go beyond corporate goals, and assist honor all long-standing commitments made to customers, stockholders, workers and the communities in which we live.<br />
<input type = "radio" name = "f1" value = "To work as an ophthalmic assistant in hospitals, or with specialized as surgeons or physicians with a specialty." />To work as an ophthalmic assistant in hospitals, or with specialized as surgeons or physicians with a specialty.<br />
<input type = "radio" name = "f1" value = "Seeking Position in systems in order to make the most of my computer science education" />Seeking Position in systems in order to make the most of my computer science education<br />
<input type = "radio" name = "f1" value = "Seek to work in a setting that will dare me extra at the same time as allowing me to add to the sustained enlargement and achievement of the organization." />Seek to work in a setting that will dare me extra at the same time as allowing me to add to the sustained enlargement and achievement of the organization.<br />
<input type = "radio" name = "f1" value = "Get hold of a position that will give me the ability to relate my sales education to a growing industry. Look forward to working with a corporation that promotes superior products and services; and give me with the chance to meet and go beyond assigned sales goals." />Get hold of a position that will give me the ability to relate my sales education to a growing industry. Look forward to working with a corporation that promotes superior products and services; and give me with the chance to meet and go beyond assigned sales goals.<br />
<input type = "radio" name = "f1" value = "To get hold of a management position, in which I am given the chance to play a direct role in the limitless growth and achievement of solid organization." />To get hold of a management position, in which I am given the chance to play a direct role in the limitless growth and achievement of solid organization.<br />
<br />
<br />


<h2>Educational Background</h2>
<table width = "1200">
<th></th><th>Name of the institution</th><th>address of institution</th><th>Course Name</th><th>Year of Passing</th><th>Percentage</th>
<tr><td>SSC</td>
<td><input type = "text" name = "secsch" /></td>
<td><input type = "text" name = "secadd" /></td>
<td><select name = "secboard" id = "secboard">
  <option value="SSC">SSC</option>
  <option value="CBSE">CBSE</option>
  <option value="ICSE">ICSE</option>
</select>
</td>
<td><input type = "text" name = "secpass" /></td>
<td><input type = "text" name = "secper" /></td>
</tr>
<tr><td>Inter</td>
<td><input type = "text" name = "twesch" /></td>
<td><input type = "text" name = "tweadd" /></td>
<td><select name = "tweboard" id = "tweboard">
  <option value="Intermediate">Intermediate</option>
  <option value="CBSE">CBSE</option>
  <option value="Diplome">Diplome</option>
</select>
</td>
<td><input type = "text" name = "twepass" /></td>
<td><input type = "text" name = "tweper" /></td>
</tr>
<tr><td>Degree</td>
<td><input type = "text" name = "degsch" /></td>
<td><input type = "text" name = "degadd" /></td>
<td><input type = "text" name = "degcourse" /></td>
<td><input type = "text" name = "degpass" /></td>
<td><input type = "text" name = "per" /></td>
</tr>
</table>

<h2>Special Training or Internships</h2>
<table width = "1200">
<th>S.No.</th><th>Name and address of Instituition</th><th>Course Name</th><th>Duration Of course</th>
<tr>
<td>1</td>
<td><input type = "text" name = "n1" /></td>
<td><input type = "text" name = "c1" /></td>
<td><input type = "text" name = "d1" /></td>
</tr>
<tr>
<td>2</td>
<td><input type = "text" name = "n2" /></td>
<td><input type = "text" name = "c2" /></td>
<td><input type = "text" name = "d2" /></td>
</tr>
<tr>
<td>3</td>
<td><input type = "text" name = "n3" /></td>
<td><input type = "text" name = "c3" /></td>
<td><input type = "text" name = "d3" /></td>
</tr>
<tr>
<td>4</td>
<td><input type = "text" name = "n4" /></td>
<td><input type = "text" name = "c4" /></td>
<td><input type = "text" name = "d4" /></td>
</tr>
</table>

<h3>Work Experience</h3>
<table width = "1200">
<th>S.no.</th><th>Name and address of Organization</th><th>From(date)</th><th>To(date)</th>
<tr>
<td>1</td>
<td><input type = "text" name = "on1" /></td>
<td><input type = "text" name = "fd1" /></td>
<td><input type = "text" name = "td1" /></td>
</tr>
<tr>
<td>2</td>
<td><input type = "text" name = "on2" /></td>
<td><input type = "text" name = "fd2" /></td>
<td><input type = "text" name = "td2" /></td>
</tr>
<tr>
<td>3</td>
<td><input type = "text" name = "on3" /></td>
<td><input type = "text" name = "fd3" /></td>
<td><input type = "text" name = "td3" /></td>
</tr>
<tr>
<td>4</td>
<td><input type = "text" name = "on4" /></td>
<td><input type = "text" name = "fd4" /></td>
<td><input type = "text" name = "td4" /></td>
</tr>
</table>

<h3>Hobbies</h3>
<table width = "1200">
<tr><td><input type = "text" name = "hb1" /></td></tr>
<tr><td><input type = "text" name = "hb2" /></td></tr>
<tr><td><input type = "text" name = "hb3" /></td></tr>
<tr><td><input type = "text" name = "hb4" /></td></tr>
<tr><td><input type = "text" name = "hb5" /></td></tr>
<tr><td><input type = "text" name = "hb6" /></td></tr>
</table>
<hr />
<h3>Contact</h3>
<table width = "1200">
<tr><td>H.No.:</td><td><input type = "text" name = "hno" /></td></tr>
<tr><td>Street:</td><td><input type = "text" name = "street" /></td></tr>
<tr><td>Village:</td><td><input type = "text" name = "village" /></td></tr>
<tr><td>Mandal:</td><td><input type = "text" name = "mandal" /></td></tr>
<tr><td>District:</td><td><input type = "text" name = "dist" /></td></tr>
<tr><td>State:</td><td><input type="text" name = "state" /></td></tr>
<tr><td>Pincode:</td><td><input type = "text" name = "pin" /></td></tr>
<tr><td>Mobile:</td><td><input type="text" name = "mob" /></td></tr>
<tr><td>E-mail:</td><td><input type = "text" name = "email" /></td></tr>

</table>

<h3>Reference</h3>
<table width = "1200">
<tr><td> Reference 1:</td><td><input type = "text" name = "ref1" /></td></tr>
<tr><td> Reference 2:</td><td><input type = "text" name = "ref2" /></td></tr>
</table>

<h3>Skills</h3>
<table width = "1200">
<tr><td>1</td><td><input type = "text" name = "exp1" /></td></tr>
<tr><td>2</td><td><input type = "text" name = "exp2" /></td></tr>
</table>

Place:<input type = "text" name = "place" /><br />
Date:<input type = "date" name = "dat" />

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
<?php /*else : */?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="../student.php">login</a>.
            </p>
        <?php /*endif; */?>
</body>
</html>