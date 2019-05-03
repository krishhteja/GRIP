<form action = "testment.php" method="post">
<?php
	include("db.php");
	$k = mysql_query("select * from testment where mentid = '123'");
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
			echo $checked[$i]."<br>";
			$p = $_POST['notif'];
			mysql_query("insert into notif values('$checked[$i]', '$p')");
		}
		/*
		for($i = 0; $i < count($checked); $i++){
			$p = $_POST['notif'];
			mysql_query("insert into notif values('$checked[$i]', '$p')");
		}
		*/
		
	}
?>