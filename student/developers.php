
<?php 
include("../includes/functions.php");
	sec_session_start();
	$a = "btech";
	$t = "grietstudentdetails";
include("db.php");
	$_SESSION['username'] = substr($email, 1, 12);
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
      <?php include("griet.php"); 
    	?>

    <br class="clear" />
</div>  </div>
  <!-- ####################################################################################################### -->
<!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
      <!-- ####################################################################################################### -->
       
  <!-- ####################################################################################################### -->
    <table width="1200" align="center" cellpadding="2" border="0">
	<tr>
 		<td>Site Developers:</td>
        <td>Under the guidance of:</td>
    </tr>
	<tr>
        <td>
         <img class="imgl" src="images/finance.jpg" alt="" width="90" height="90" />
			Kishna Teja Vaddepalli<br /><br />
			11241A05B4<br /><br />
			CSE<br /><br />
          </td>
          <td>
          <img class="imgl" src="images/finance.jpg" alt="" width="90" height="90" />
			Dr. Jandhyala N Murthy<br /><br />
			Principal<br /><br />
			GRIET<br /><br />
          </td>
	</tr>
    <tr>
    	<td>
        <img class="imgl" src="images/finance.jpg" alt="" width="90" height="90" />
			Poojita Peesapati<br /><br />
			11241A0546<br /><br />
			CSE<br /><br />
        </td>
        <td>
        <img class="imgl" src="images/finance.jpg" alt="" width="90" height="90" />
			Dr. N.Sandhya <br /><br />
			HOD, CSE<br /><br />
			GRIET<br /><br />
         </td>
	</tr>
    <tr>
    	<td>
          <img class="imgl" src="images/finance.jpg" alt="" width="90" height="90" />
			Nethrika Garikapati<br /><br />
			11241A0513<br /><br />
			CSE<br /><br />
        </td>
	</tr>
    <tr>
    	<td>
           <img class="imgl" src="images/finance.jpg" alt="" width="90" height="90" />
			Vamsi Krishna Donthu<br /><br />
			11241A0570<br /><br />
			CSE<br /><br />
		</td>
	</tr>
</table>
</div></div>
 <!-- ####################################################################################################### -->
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
<?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="../student.php">login</a>.
            </p>
        <?php endif; ?>

</body>
</html>