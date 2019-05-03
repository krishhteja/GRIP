<?php 
	include("../includesatten/functions.php");
	sec_session_start();
	include("db.php");
	$usr = $_SESSION['username'];
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
	  </div>
  </div>
  <!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div class="rnd">
    <!-- ###### -->
    <div id="topnav">
      <ul>
        <li><a href="updatepwd.php">Change Password</a></li>
        <li><a href="../includesatten/logout.php">Logout</a></li>
      </ul>
	</div>        
    <!-- ###### -->
  </div>
</div>
  <!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">

<h3>Please note new password must be atleast 6 characters long</h3>
<form name = "test" method="post">
    password: <input type = "password" name = "pwd" />
    new password: <input type = "password" name = "new" />
    confirm: <input type = "password" name = "confirm" />
    <input type = "submit" name = "sub" />
<?php
	if(isset($_POST['sub'])){
		$k = mysql_query("select * from attenmembers where username  =  '$_SESSION[username]'");
		while($row = mysql_fetch_array($k)){
			$p = $row['encemail'];
			$kp = $row['password'];
		}	
		$a = hash("sha512", $_POST['pwd']);
		$t = hash("sha512", $a.$p);
		echo "<br>";
		if($kp == $t){
			if(strlen($_POST['new']) > 3){
				if($_POST['new'] == $_POST['confirm']){
					$n = hash("sha512", $_POST['new']);
					$s = hash("sha512", $n.$p);
					$a = mysql_query("UPDATE attenmembers SET password = '$s' WHERE username = '$_SESSION[username]' ");
					if($a == 1){
						echo "successfully updated";
					}
				}
			}
		}


	}
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
                <span class="error">You are not authorized to access this page.</span> Please <a href="../attendance.php">login</a>.
            </p>
        <?php endif; ?>

</body>
</html>