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
<link rel="stylesheet" href="../styles/layout.css" type="text/css" />
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
  <!-- ####################################################################################################### -->

  <!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
    
<?php
if (isset($_POST['s']))
{
	 
	 $fid=$_POST['d'];
//echo "mysql_query(SELECT * from assign where dept='$fid')";
$idat=mysql_query("SELECT * from assign where branchcode='$fid'");

  ?>
  Branchcode-<?php echo $fid ; ?>
 

 <input type="button" border = '2' onclick="tableToExcel('testTable', 'W3C Example Table')" value="Export to Excel">
<table id="testTable" summary="Code page support in different versions of MS Windows." rules="groups" frame="hsides" border="2">

<tr> <td> <b>ID </td>
      <td> <b>Name</td>
      <td> <b>Date</td>
      <td> <b>FN/AN </td>
       <td> <b>Designation</td>
      
       
       
     
<?php
	while($id = mysql_fetch_assoc($idat))
  {
		?>
        <tr> <td><?php echo $id['id'] ?></td>
          <td><?php echo $id['name'] ?></td>
           <td><?php echo $id['date'] ?></td>
           <td><?php echo $id['fnoran'] ?></td>
           <td><?php echo $id['designation'] ?></td>
     
           </tr>
<?php	
       }
}	 
	?>

</tr>
</table>


<a href="./department.php">back</a>

<h4>PRESS CTRL+p TO PRINT</h4>

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
                <span class="error">You are not authorized to access this page.</span> Please <a href="../../examlogin.php">login</a>.
            </p>
        <?php endif; ?>

</body>
</html>

