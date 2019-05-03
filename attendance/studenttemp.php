<?php
	$usr = $_SESSION['username'];
	$a = "facprof";
	$t = "facgen";
	$p = $_SESSION['username'];
?>

<br /><br /><br /><br />
		<img class = "imgr" src= "../images/fac_images/
	<?php echo $p?>.JPG" height="100" width="90">
		<table width = "300">
<?php
		$k = mysql_query("select * from facgen where id  = '$_SESSION[username]'");
		while($row = mysql_fetch_array($k)){
?>
        <tr><td>Name:</td><td><?php echo $row['lname']." ".$row['fname']." ".$row['mname'];?></td></tr>
		<tr><td>Id:</td><td><?php echo $row['id']; ?></td></tr>
    	<tr><td>Gender:</td><td><?php	if($row['gen'] == 'M'){
											echo "Male";
										}
										else{
											echo "Female";
										}
			}?></td></tr>
        <tr><td>Designation:</td><td>
		<?php
			$a = mysql_query("select * from facprof where id = '$_SESSION[username]'");
			while($row = mysql_fetch_array($a)){
				echo $row['desig'];
			}
		?>
</td></tr></table>
