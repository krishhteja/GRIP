<?php
	$usr = $_POST['t1'];
	$a = "btech";
	$t = "grietstudentdetails";
?>
		<img class = "imgr" src= "../images/student_images/
	<?php echo $usr ?>.JPG" height="100" width="90">
		<table width = "300">
<?php
		$k = mysql_query("select * from $t where rollno  = '$usr'");
		while($row = mysql_fetch_array($k)){
?>
        <tr><td>Name:</td><td><?php echo $row['name'];?></td></tr>
		<tr><td>Id:</td><td><?php echo $row['rollno']; ?></td></tr>
    	<tr><td>Gender:</td><td><?php	if($row['gender'] == 'M'){
											echo "Male";
										}
										else{
											echo "Female";
										}
			}?></td></tr>
        <tr><td>Branch:</td><td>
		<?php 
			$p = mysql_query("SELECT gb.branchsname
			FROM grietbranches gb, grietstudentdetails gs
			WHERE gs.branchcode = gb.branchcode AND rollno =  '$usr'"); 
			while($row = mysql_fetch_array($p)){
				echo $row['branchsname'];
			}
			?></td></tr></table>
