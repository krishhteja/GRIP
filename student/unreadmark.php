<?php 
include_once 'includes/db_connect.php';
$_SESSION['username'] = '11241A05B4';
mysql_query("update notif set status = '0' where msgid = '$_GET[msgid]'");
echo "update notif set status = '0' where msgid = '$_GET[msgid]'";
header('Location:http://localhost:8888/gripa/template.php#!/list-of-messages');
die();
?>