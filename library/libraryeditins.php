<?php
	include("../includeslib/functions.php");
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
<body id="top">
<div class="wrapper">
  <!-- ####################################################################################################### -->
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1>GRIP</h1>
 <p>GRIET Resources and Information Portal</p>
      <p style="color: #800000; font-size:16px;"></p>
    </div>
	<div class="fl_right">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.griet.ac.in"><img src="images/griet.png" alt="" /></a>
    	 
</div>    <br class="clear" />
    	  </div>
  </div>
  <!-- ####################################################################################################### -->
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <?php if (login_check($mysqli) == true) : ?>
     <?php 
	include("studenttemp.php");
			?>    
	  </div>
  </div>
  <!-- ####################################################################################################### -->
   
<div class="wrapper row2">
  <div class="rnd">
    <!-- ###### -->
    <div id="topnav">
      <ul>
      	<li class="active"><a href="issueinfo.php">Student</a></li>
        <li><a href="edit.php">Issue</a></li>
        <li><a href="return.php">Return</a></li>
        <li><a href="bookholder.php">Book holders</a></li>
        <li><a href="library.php">Search</a></li>
        <li><a href = "../includeslib/logout.php">Logout</a></li>
      </ul>
	</div>        
    <!-- ###### -->
  </div>
</div>
  <!-- ####################################################################################################### -->
  <div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
<form action="libraryeditins.php?id=<?php echo $_SESSION['username'] ?>" method="post">
   <h3>Library:</h3>     
<table width="900" align="center" cellpadding="2" border="0">
	<?php 
		echo "<th>Check</th><th>S.no</th><th>Book id</th><th>Issue date</th><th>Return date</th>";
		$at = $_POST['t1'];
		$n = "e";	
		$c = "d";
		$s = 1;
		
		$kp = mysql_query("SELECT * from libissueret where rollno = '$at'");
		$b = mysql_num_rows($kp);
		while($row = mysql_fetch_array($kp)){
					echo "<tr><td><input type='checkbox' name = 'student[]' value = '".$row['accno']."'>";
					echo "</td><td>".$s;
					echo "</td><td>".$row['accno'];
					echo "</td><td>".$row['issuedate'];
					echo "</td><td>".$row['returndate'];
					$s++;
		}?>
        </table>
        <input type = "hidden" name = "t1" value = <?php echo $_POST['t1'] ?> />
        <input type="submit" name="submit" value="submit" />
        </form>
        <?php
		if(isset($_POST['submit'])){
			$checked = $_POST['student'];
			for($i = 0; $i < count($checked); $i++){
				if($checked[$i] == true){
					$del = $checked[$i];
					mysql_query("delete from libissueret where accno = '$del'");
					mysql_query("update books set status = 'available' where accno = '$del'");
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
                <span class="error">You are not authorized to access this page.</span> Please <a href="../librarylogin.php">login</a>.
            </p>
        <?php endif; ?>
</body>
</html>