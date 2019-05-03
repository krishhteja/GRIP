<?php 
	include("../includeslib/functions.php");
	sec_session_start();
	include("db.php");
	$id = $_SESSION['username'];
	$stu = $_POST['stuid'];
    $d = date('Y/m/d');
	$d1 = date("Y/m/d", strtotime($d ." +15 days") );	
	for($i = 1; $i < 9; $i++){
		$book = $_POST['b'.$i];
		if(!empty($book)){
			mysql_query("INSERT into libissueret(staffid, rollno, accno, issuedate, returndate) values('$id', '$stu', '$book','$d','$d1')");		
			mysql_query("update books set status = '$stu' where accno = '$book'");
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
<body id="top">
<div class="wrapper">
  <!-- ####################################################################################################### -->
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <?php if (login_check($mysqli) == true) : ?>
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
    <div class="fl_left">
   
	  </div>
  </div>
  <!-- ####################################################################################################### -->
   
<div class="wrapper row2">
  <div class="rnd">
    <!-- ###### -->
    <div id="topnav">
      <ul>
      	<li><a href="issueinfo.php">Student</a></li>
        <li class="active"><a href="edit.php">Issue</a></li>
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

   <h3>Library:</h3> 
<?php
	echo "Details of the books taken by ".$stu." are<br>";
	?>
    <table width="900" align="center" cellpadding="2" border="0">
	<?php 
		echo "<th>Book id</th><th>Issue date</th><th>Return date</th>";
		$stu = $_POST['stuid'];
    	$kp = mysql_query("SELECT * from libissueret where rollno = '$stu'");
		while($row = mysql_fetch_array($kp)){
			$k = mysql_query("select title from books where accno = '$row[accno]'");
			echo "<tr><td>".$row['accno']."</td><td>".$row['issuedate']."</td><td>".$row['returndate']."</td></tr>";
		}
	?></table>
    <?php

/*		$at = mysql_query("select rollno from libissueret where accno = '$book'");
		while($row2 = mysql_fetch_array($at))
			if($row2['rollno'] == $usr){
				echo "<tr><td>"."Student Id : "."</td><td>".$usr."</td><tr><td>"."Book Id : "."</td><td>".$book."</td></tr><td>";
				echo "</td></tr><tr><td>"."Issue Date : "."</td><td>".$d."</td></tr><td>"."Return Date : "."</td><td>".$d1."</td></tr>";
	}
	else{ 
		echo "book already issued to:  ";
		$a = mysql_query("select rollno from libissueret where accno = '$book'");
		while($row1 = mysql_fetch_array($a)) 
			echo $row1['rollno'];
		echo "<br>can't be re-issued.";
	}
 */?>
 </table>
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