<?php 
	include("../../includes1/functions.php");
	sec_session_start();
	include("../db.php");
	$a = "btech1";
	$t = "grietstudentdetails";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head>
<link rel="icon" href="../images/grip.ico" type="image/x-icon">
<title>GRIP </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="../styles/layout.css" type="text/css" />
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
     <?php include("../griet.php"); 	
			echo "<br />";
	include("stutemp.php");
			?>    
  			  </div>
  </div>
  <!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div class="rnd">
    <!-- ###### -->
    <div id="topnav">
      <ul>
        <li><a href="stugeneral.php?student=<?php echo $_GET['student'] ?>">General</a></li>
        <li><a href="stupreadm.php?student=<?php echo $_GET['student'] ?>">Pre admission</a></li>
		<li><a href="stuacademic.php?student=<?php echo $_GET['student'] ?>">Academic</a></li>
        <li class="active"><a href="stufinance.php?student=<?php echo $_GET['student'] ?>">Finance</a></li>
		<li><a href="stulibrary.php?student=<?php echo $_GET['student'] ?>">Library</a></li>
        <li><a href="stutransport.php?student=<?php echo $_GET['student'] ?>">Transport</a></li>
        <li><a href="stuextracur.php?student=<?php echo $_GET['student'] ?>">Extra Curricular</a></li></ul>
	</div>        
    <!-- ###### -->
  </div>
</div>
  <!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
	<?php
		$k = mysql_query("select * from finance where rollno = '$_GET[student]'");
		while($row = mysql_fetch_array($k)){
	?>
   <h3><u>Finance</u></h3> 
    <table width="900" align="center" cellpadding="2" border="0">
<th></th>
<th> I year </th>
<th> II year </th>
<th> III year </th>
<th> IV year </th>
    <tr><td>Tuition Fee:</td>
    <td><?php echo $row['tf1'];?></td><td><?php echo $row['tf2'];?></td><td><?php echo $row['tf3'];?></td><td><?php echo $row['tf4'];?></td></tr>
    
     <tr><td>Transportation Fee:</td>
      <td><?php echo $row['bf1'];?></td><td><?php echo $row['bf2'];?></td><td><?php echo $row['bf3'];?></td><td><?php echo $row['bf4'];?></td></tr>
      <tr><td>Library Fee:</td>
      <td><?php echo $row['lf1'];?></td><td><?php echo $row['lf2'];?></td><td><?php echo $row['lf3'];?></td><td><?php echo $row['lf4'];?></td> </tr>
      <tr><td>University Fee:</td>
    <td><?php echo $row['uf1'];?></td><td><?php echo $row['uf2'];?></td><td><?php echo $row['uf3'];?></td><td><?php echo $row['uf4'];?></td></tr>
    
     <tr><td>Other Fee:</td>
      <td><?php echo $row['of1'];?></td><td><?php echo $row['of2'];?></td><td><?php echo $row['of3'];?></td><td><?php echo $row['of4'];?></td></tr>
      <tr><td>Special Fee:</td>
      <td><?php echo $row['sf1'];?></td><td><?php echo $row['sf2'];?></td><td><?php echo $row['sf3'];?></td><td><?php echo $row['sf4'];?></td> </tr>
      
       <tr><td>	Total:
        </td><td><?php
			$t = array($row['tf1'] ,$row['bf1'], $row['lf1'], $row['uf1'], $row['of1'], $row['sf1']);
			echo array_sum($t);?> </td>
            <td><?php
			$t = array($row['tf2'] ,$row['bf2'], $row['lf2'], $row['uf2'], $row['of2'], $row['sf2']);
			echo array_sum($t);?> </td>
            <td><?php
			$t = array($row['tf3'] ,$row['bf3'], $row['lf3'], $row['uf3'], $row['of3'], $row['sf3']);
			echo array_sum($t);?> </td>
            <td><?php
			$t = array($row['tf4'] ,$row['bf4'], $row['lf4'], $row['uf4'], $row['of4'], $row['sf4']);
			echo array_sum($t);?> </td>
            </tr>
      
	    <tr><td>Receipt number:</td>
		<td><?php echo $row['rno1'];?></td><td><?php echo $row['rno2'];?></td><td><?php echo $row['rno3'];?></td><td><?php echo $row['rno4'];?></td></tr>
        <tr><td>Receipt date:</td>
		<td><?php echo $row['rdt1'];?></td><td><?php echo $row['rdt2'];?></td><td><?php echo $row['rdt3'];?></td><td><?php echo $row['rdt4']; ?></td></tr>
        
         
        </table>
 <h2><u>Scholarships</u></h2>
 
<?php
	//		$k = mysql_query("select * from scholarship where id = '$_GET[id]'");
//			while($row = mysql_fetch_array($k)){
		?>
    <table width="900" align="center" cellpadding="2" border="0">
<th></th>    
<th> I year </th>
<th> II year </th>
<th> III year </th>
<th> IV year </th>
<tr><td>
        Name of Scholarship:
       </td><td> <?php 
	//		echo $row['name'];
		?>
</td></tr>
<tr><td> Amount:
        </td><td><?php 
		//	echo $row['amount'];
		?>
</td></tr>
<tr><td> Cheque number:
        </td><td><?php 
			//echo $row['cheque'];
		}
		?>
        </td></tr>
        </table>

  </div>
  </div>
  </div>

 <!-- ####################################################################################################### -->

       <div id="copyright">
    <p class="fl_left">Copyright &copy; <?php echo date("Y"); ?> - All Rights Reserved - <a href="../developers.php">GRIET</a></p>
    <br class="clear" />
</div>  <!-- ####################################################################################################### -->
  <br class="clear" />
</div>
<?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="../../student.php">login</a>.
            </p>
        <?php endif; ?>

</body>
</html>