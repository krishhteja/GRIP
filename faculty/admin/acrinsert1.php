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
      	<li><a href="certiupload.php">Certificate Upload</a></li>
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
		if (!isset($_POST['update'])){
	
		$brcode = 0;
		$name = "";
		$a = $_POST['id'];
		//echo $a;
		$res = mysql_query("SELECT * FROM grietfaculty WHERE id=$a");
			while($row=mysql_fetch_array($res))
			{
				$brcode = $row['branchcode'];
				$name = $row['name'];
			}
		
	?>
	
    <form name = "acrinsert1.php" action = "acrinsert1.php" method = "POST">
 	<table>
   <img class = "imgr" src = "../../images/fac_images/<?php echo $_POST['id'] ?>.JPG" height="100" width="90">

        <tr>
        	<td>
            	Name
            </td>
            <td>
            	<?php echo $name; ?>
            </td>
        </tr>
        <tr>
        	<td>
            	Activity
            </td>
            <td>
            	<input type="text" name="activity" required="required" />
            </td>
        </tr>
        <tr>
        	<td>
            	From Date
            </td>
            <td>
            	<input type="date" name="fdate" required="required" />
            </td>
        </tr>
        <tr>
        	<td>
            	To Date
            </td>
            <td>
            	<input type="date" name="tdate" required="required" />
            </td>
        </tr>
        <tr>
        	<td>
            	No. of days
            </td>
            <td>
            	<input type="text" name="days" required="required" />
            </td>
        </tr>
        <tr>
        	<td>
            	Location
            </td>
            <td>
            	<input type="text" name="location" required="required" />
            </td>
        </tr>
        <tr>
        	<td>
            	Code
            </td>
            <td>
            	<select name="code">
					<option value="1">1  - Paper Presentation National</option>     
                    <option value="2">2  - Paper Presentation International</option>
                    <option value="3">3  - Conference/ Workshop/Seminar Attended National</option>
                    <option value="4">4  - Conference/ Workshop/Seminar Attended International</option>
                    <option value="5">5  - Conference/ Workshop/Seminar Conducted National</option>
                    <option value="6">6  - Conference/ Workshop/Seminar Conducted International</option>
                    <option value="7">7  - Exam Duties Observer</option>
                    <option value="8">8  - Exam Duties Valuation</option>
                    <option value="9">9  - Examination Duties External Examiner UG</option>
                    <option value="10">10 - Examination Duties External Examiner PG</option>			<!-- having doubt here as given in excel file I've entered -->
                    <option value="11">11 - Member BOS</option>
                    <option value="12">12 - Selection Panel Member</option>
                    <option value="13">13 - Guest Lecture</option>
                    <option value="14">14 - Keynote Speaker/ Chief Guest</option>      
                    <option value="15">15 - Patent</option>
                    <option value="16">16 - Awards</option> 
                    <option value="17">17 - Others</option>  
                </select>
            </td>
        </tr>
    </table>
    <input type="hidden" name="fid" value="<?php echo $_POST['id']; ?>" />
    
    <input type="hidden" name="dept" value="<?php echo $brcode; ?>" />
    <input type = "submit" name = "update" value = "submit" />
    
        </form>

<?php
    }
    if (isset($_POST['update'])){
        $a = mysql_query("insert into acr (fid, activity, fdate, tdate, days, location, code)values ('$_POST[fid]', '$_POST[activity]', '$_POST[fdate]', '$_POST[tdate]','$_POST[days]', '$_POST[location]', '$_POST[code]')");
        //$acr = mysql_query("select * from acr");
        
        if($a)
            echo "Successful!!!To enter another acr, <a href = 'acrinsert.php'>Click Here</a>";
        else
            echo "Not uploaded, please reupload the previous entry by <a href = 'acrinsert.php'>Clicking Here</a>";
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
