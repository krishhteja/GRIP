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
    if ($test == true){
        // Login success 
		$_SESSION['firstletter']=substr($email, 0,1);
		$_SESSION['username'] = substr($email, 1, 12);
		$_SESSION['value'] = substr($email, 0, 1);
		//if($email == 'eadmin')
		if(substr($email, 0, 2) == 'ea')
			header("Location: ../exams/admin/choice.php");
        else
			if((($_SESSION['firstletter']) == 'e')&&($_SESSION['username'] != 'admin')){
				header("Location: ../exams/final_report.php");
			}
    }
	else {
        // Login failed 
  		header("Location: ../examlogin.php");
    }
} else {
    // The correct POST variables were not sent to this page. 
    echo 'Invalid Request';
}
?>