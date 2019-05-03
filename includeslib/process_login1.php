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
	$test = login1($email, $password, $mysqli);
    if ($test == true) {
        // Login success 
	   header("Location: ../library/issueinfo.php?id=$kp");
    
    } else {
        // Login failed 
  		header("Location: ../library.php");

    }
} else {
    // The correct POST variables were not sent to this page. 
    echo 'Invalid Request';
}
?>