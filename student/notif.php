<form action = "testment.php" method="post">
<?php
	include("db.php");
	//for testing do change the mentid :)
	$k = mysql_query("select * from mentorstudent where mentid = (select username from facmembers where encemail = '$_GET[id]')");
	while($row = mysql_fetch_array($k)){
		$p = "student";
		echo "<input type='checkbox' name = 'student[]' value = '".$row[$p]."'>".$row[$p]."<br>";
	}
?>
Message:<br>
<textarea name="notif" cols="40" rows="5"></textarea><br />
<input type = "submit" name = "submit" >
</form>
<?php
	if(isset($_POST['submit'])){
		$checked = $_POST['student'];
		echo count($checked)."<br>";
		for($i = 0; $i < count($checked); $i++){
			$p = $_POST['notif'];
			mysql_query("insert into notif values('$checked[$i]', '$p')");
		}
	}
?>
