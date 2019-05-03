<?php
include_once 'db_connect.php';
include_once 'psl-config.php';
include_once 'functions.php';
sec_session_start(); 

    	$k = mysql_query("INSERT into academics values('$_POST[id]', '$_POST[curyear]', '$_POST[section]', '$_POST[IyIsmar]', '$_POST[IyIsper]', '$_POST[IyIsbck]', '$_POST[IyIIsmar]', '$_POST[IyIIsper]', '$_POST[IyIIsbck]', '$_POST[IIyIsmar]', '$_POST[IIyIsper]', '$_POST[IIyIsbck]', '$_POST[IIyIIsmar]', '$_POST[IIyIIsper]', '$_POST[IIyIIsbck]', '$_POST[IIIyIsmar]', '$_POST[IIIyIsper]', '$_POST[IIIyIsbck]', '$_POST[IIIyIIsmar]', '$_POST[IIIyIIsper]', '$_POST[IIIyIIsbck]', '$_POST[IVyIsmar]', '$_POST[IVyIsper]', '$_POST[IVyIsbck]', '$_POST[IVyIIsmar]', '$_POST[IVyIIsper]', '$_POST[IVyIIsbck]')");
header("Location:thanks.php");
?>