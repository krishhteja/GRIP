<?php
include_once 'db_connect.php';
include_once 'functions.php';
sec_session_start(); // Our custom secure way of starting a PHP session.
if (isset($_POST['email'], $_POST['pa'])) {
    $email = $_POST['email'];
    $password = $_POST['pa'];
	$e1 = strtoupper($email);
	$kp = hash('sha512', $e1);
	 // The hashed password.
	$test = login($email, $password, $mysqli);
    if ($test == true) {
        // Login success
		$_SESSION['username'] = substr($email, 1, 12);
		$_SESSION['value'] = substr($email, 0, 1);
        if(substr($email, 0, 1) == 'a')
            header("Location: ../faculty/admin/acrinsert.php");
        else
            header("Location: ../faculty/general.php");
    } else {
        // Login failed 
  		header("Location: ../faculty.php");

    }
} else {
    // The correct POST variables were not sent to this page. 
    echo 'Invalid Request';
}
?>