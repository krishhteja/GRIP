<?php
	include("db.php");
	$k = mysql_query("select * from members where username  =  '11241A05B4'");
	while($row = mysql_fetch_array($k)){
		$p = $row['salt'];
		$kp = $row['password'];
	}	
		
?>
<form name = "test" method="post">
    password: <input type = "password" name = "pwd" />
    new password: <input type = "password" name = "new" />
    confirm: <input type = "password" name = "confirm" />
    <input type = "submit" name = "sub" />
<?php
	if(isset($_POST['sub'])){
		$a = hash("sha512", $_POST['pwd']);
		$t = hash("sha512", $a.$p);
		echo "<br>";
		if($kp == $t){
			if(strlen($_POST['new']) > 6){
				if($_POST['new'] == $_POST['confirm']){
					$n = hash("sha512", $_POST['new']);
					$s = hash("sha512", $n.$p);
					$a = mysql_query("UPDATE members SET password = '$s' WHERE username = '11241A05B4' ");
					if($a == 1){
						echo "successfully updated";
					}
				}
			}
		}


	}
?>