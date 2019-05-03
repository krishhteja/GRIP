<html>
<?php 
	include("../../includesexam/functions.php");
	sec_session_start();
	include("db.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head>
<link rel="icon" href="../images/grip.ico" type="image/x-icon">
<title>GRIP </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<script>
  var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
    window.location.href = uri + base64(format(template, ctx))
  }
})()
</script>
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
     <?php include("griet.php"); 	
			echo "<br />";
			?>    
	  </div>
  </div>
  <div class="wrapper row2">
  <div class="rnd">
    <!-- ###### -->
    <div id="topnav">
      <ul>
        
		<li><a href="final_report.php" >Back</a></li>
        <li><a href="add.php">Add Faculty</a></li>
		<li><a href="delete.php">Delete Faculty</a></li>
      </ul>
	</div>        
    <!-- ###### -->
  </div>
</div>

  <!-- ####################################################################################################### -->
  <!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
        <input type="button" border = '2' onClick="tableToExcel('testTable', 'W3C Example Table')" value="Export to Excel">
<table id="testTable" summary="Code page support in different versions of MS Windows." rules="groups" frame="hsides" border="2">
		<th>ID</th>
        <th>Department</th>
        <th>Designation</th>
		<th>Name</th>
		<th>BranchCode</th>

<?php
{
	
	include("db.php");
	$idat=mysql_query("SELECT * from grietfaculty");
	while($id = mysql_fetch_assoc($idat))
    {
?>
<tr> <td> <?php echo $id['id'] ?> </td>
     <td> <?php echo $id['deid'] ?> </td>
     <td> <?php echo $id['designation'] ?> </td>
	 <td> <?php echo $id['name'] ?> </td>
	 <td> <?php echo $id['branchcode'] ?> </td>
	
      
</tr>		 	
     <?php  
	}
}
?>

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
                <span class="error">You are not authorized to access this page.</span> Please <a href="../../examlogin.php">login</a>.
            </p>
        <?php endif; ?>

</body>
</html>


</html>