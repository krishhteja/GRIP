<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
if(!empty($_SESSION['username'])){
	$kp = hash('sha512', $_SESSION['username']);
	header("Location:student/index.php?id=$kp");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Registration Success</title>
        <link rel="stylesheet" href="styles/main.css" />
    </head>
    <body>
        <h1>Registration successful!</h1>
        <p>You can now go back to the <a href="faculty.php">login page</a> and log in</p>
    </body>
</html>