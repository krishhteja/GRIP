<?php 
include("../includes/functions.php");
	include("db.php");
sec_session_start();
	$usr = $_GET['id'];
	$k = mysql_query("Select username from members where encemail = '$usr'");
	while($row = mysql_fetch_array($k)){
		$p = $row['username'];
	}
    	$k = mysql_query("INSERT into academics values('$p', '$_POST[curyear]', '$_POST[section]', '$_POST[IyIsmar]', '$_POST[IyIsper]', '$_POST[IyIsbck]', '$_POST[IyIIsmar]', '$_POST[IyIIsper]', '$_POST[IyIIsbck]', '$_POST[IIyIsmar]', '$_POST[IIyIsper]', '$_POST[IIyIsbck]', '$_POST[IIyIIsmar]', '$_POST[IIyIIsper]', '$_POST[IIyIIsbck]', '$_POST[IIIyIsmar]', '$_POST[IIIyIsper]', '$_POST[IIIyIsbck]', '$_POST[IIIyIIsmar]', '$_POST[IIIyIIsper]', '$_POST[IIIyIIsbck]', '$_POST[IVyIsmar]', '$_POST[IVyIsper]', '$_POST[IVyIsbck]', '$_POST[IVyIIsmar]', '$_POST[IVyIIsper]', '$_POST[IVyIIsbck]')");
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

  	Thanks for filling the form!!! <br />
        <li><a href="../includes/logout.php">Logout</a></li>

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