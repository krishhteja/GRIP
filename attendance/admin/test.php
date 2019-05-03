<?php
	include "db.php";
	$k = mysql_query("select uid, login from staff");
	$i = 0;
	while($p = mysql_fetch_array($k)){
		$hash = hash("sha512", $p['uid']);
		$pwd = hash("sha512", $hash.$hash);
		mysql_query("insert into facmembers values ('$i', 'f$p[uid]', '$p[login]', '$pwd', '$hash', '$hash')");
		mysql_query("insert into attenmembers values ('$i', 'a$p[uid]', '$p[login]', '$pwd', '$hash', '$hash')");
//		mysql_query("insert into members values ('$i', 'f$p[uid]', '$p[login]', '$pwd', '$hash', '$hash')");
		$i++;
	}
	
?>