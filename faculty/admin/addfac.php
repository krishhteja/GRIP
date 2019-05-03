<?php 
	include("../../includes1/functions.php");
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
<script language="javascript">
function keyPressed(e){
	var key;
	if(window.event)
		key = window.event.keyCode;
	else
		key = e.which;
	return(key != 13);
}
</script>
<body id="top" oncontextmenu="return false" onKeyPress = "return keyPressed(event)">
<div class="wrapper">
  <!-- ####################################################################################################### -->
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
    <?php if (login_check($mysqli) == true) : ?>
     <?php include("griet.php"); 	
			?>    
	  </div>
  </div>
  <!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div class="rnd">
    <!-- ###### -->
    <div id="topnav">
      <ul>
            <li><a href="report.php">Report</a></li>
      <li><a href="certiupload.php">Certificate Upload</a></li>
	<li><a href="acrinsert.php">add acr</a></li>
        <li><a href="../../includes1/logout.php">Logout</a></li>		<!-- Having doubt here -->
      </ul>
	</div>        
    <!-- ###### -->
  </div>
</div>
  <!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
    <?php
		if (!isset($_POST['update1'])){
	?>
    <form name = "addfac.php" action = "addfac.php" method = "POST" enctype="multipart/form-data">
 	<table>
    	<tr>
        	<td>
            	Faculty ID
            </td>
            <td>
            	<input type="text" name="id" required="required"/>
            </td>
        </tr>
        <tr>
        	<td>
            	Name
            </td>
            <td>
            	<input type="text" name="name" required="required"/>
            </td>
        </tr>
        <tr>
        	<td>
            	dept
            </td>
            <td>
            	<select name="dept">
                	<option value="A01">Civil Engineering</option>
                    <option value="A02">Electrical & Electronics Engineering</option>
                    <option value="A03">Mechanical Engineering</option>
                    <option value="A04">Electronics & Communications Engineering</option>
                    <option value="A05">Computer Science & Engineering</option>
                    <option value="A11">Bio Medical Engineering</option>
                    <option value="A12">Information Technology</option>
                    <option value="A23">Bio Technology</option>
                </select>
            </td>
        </tr>
        <tr>
        	<td>
            	Date of Joining
            </td>
            <td>
            	<input type="date" name="doj" required="required"/>
            </td>
        </tr>
       
        <tr>
        	<td>
            	Mobile
            </td>
            <td>
            	<input type="text" name="mobile" required="required"/>
            </td>
        </tr>
        <tr>
        	<td>
            	Email
            </td>
            <td>
            	<input type="text" name="email" required="required"/>
            </td>
        </tr>
        <tr>
        	<td>
            	Designation ID
            </td>
            <td>
            	<select name="desid">
                	<option value="1Professor">1 - Professor</option>
                    <option value="2Associate Professor">2 - Associate Professor</option>
                    <option value="3Asst. Professor">3 - Asst. Professor</option>
                    <option value="4Jr.Asst">4 - Jr.Asst</option>
                    
                </select>
            </td>
        </tr>
        <tr>
        	<td>
            	Photo
            </td>
            <td>
            	<input type="file" name="file" required="required"/>
            </td>
        </tr>
    </table>

    <input type = "submit" name = "update1" value = "submit" />

    </form>
    <?php
		}
		else{
			//to write the insert code
			$des = substr($_POST['desid'],1);
			$desid = substr($_POST['desid'],0,1);
			mysql_query("insert into grietfaculty (name, id, designation, doj, mobile, email, deid, branchcode)values ('$_POST[name]', '$_POST[id]', '$des', '$_POST[doj]', '$_POST[mobile]', '$_POST[email]', '$desid', '$_POST[dept]')");
		
		if ($_FILES["file"]["error"] > 0) {
    		echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
		} else {
		    if (file_exists("../../images/fac_images/" . $_POST['id'].".jpg")) {
    		    echo $_POST['id'] . ".jpg already exists. " ;
    		} else {
       			move_uploaded_file($_FILES["file"]["tmp_name"],"../../images/fac_images/".$_POST['id'].".jpg");
    		}	
		}
	?>
    Successful!!! <a href="addfac.php">CLICK HERE</a> to add another faculty
    <?php
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
                <span class="error">You are not authorized to access this page.</span> Please <a href="../../attendance.php">login</a>.
            </p>
        <?php endif; ?>

</body>
</html>
