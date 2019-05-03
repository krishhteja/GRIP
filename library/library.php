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
 <title>GRIP</title>
        <link rel="stylesheet" href="styles/main.css" />
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
    </head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />

<body id="top">

<div class="wrapper">
  <!-- ###################################################################################################### -->
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
     <?php if (login_check($mysqli) == true) : ?>
	 <?php include("griet.php"); ?>
    <br class="clear" />
</div>  </div>
  <!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div class="rnd">
    <!-- ###### -->
    <div id="topnav">
      <ul>
      	<li><a href="issueinfo.php">Student</a></li>
        <li><a href="edit.php">Issue</a></li>
        <li><a href="bookholder.php">Book holders</a></li>
        <li class="active"><a href="library.php">Search</a></li>
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
      <!-- ####################################################################################################### -->
      <div id="content">
       
  <!-- ####################################################################################################### -->
 <div id="latestnews">
<h3>Welcome to GRIET library,</h3>
<form name = "library" action = "library.php" method="post">
Search: 
<select name = "opt" id = "opt">
  <option value="dept">Branch</option>
  <option value="title">Book</option>
  <option value="auth">Author</option>
  <option value="publisher">Publisher</option>
</select>
<input type="text" name = "branch"  />
&amp;&nbsp;&nbsp;<select name = "opt2" id = "opt2">
  <option value="dept">Branch</option>
  <option value="title">Book</option>
  <option value="auth">Author</option>
  <option value="publisher">Publisher</option>
</select>
<input type="text" name = "branch2"  />
<input type="submit" name = "submit" value = "submit" />
</form>
<?php
if(isset($_POST['submit'])){
?>
<table>
<th>Title</th>
<th>Copies available</th>
<th>Author</th>
<th>Subject</th>
<th>Publisher</th>
<th>Pages</th>
<tr>
<br />
<?php
	$a = $_POST['opt'];
	$t = $_POST['branch'];
	$n = $_POST['opt2'];
	$s = $_POST['branch2'];
	$k = mysql_query("SELECT * FROM booksearch where $a LIKE '%$t%' and $n LIKE '%$s%'");
	while($p = mysql_fetch_array($k)){
		echo "<td>".$p['title']."</td><td>".$p['copies']."</td><td>".$p['auth']."</td><td>".$p['subj']."</td><td>".$p['publisher']."</td><td>".$p['pages']."</tr>";
	}
}
?>
</tr></table>
</div></div>
 <!-- ####################################################################################################### -->
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