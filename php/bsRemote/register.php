<?php
include("../../includes/dbconnect.php");

header('Content-type: application/json');
$valid = true;
$users = array(
		'admin'         => 'admin@streetview.com',
		'administrator' => 'administrator@streetview.com',
		'root'          => 'root@streeview.com',
);


if (isset($_POST['username'])){
	$username = $_POST['username'];
	
	if (array_key_exists($_POST['username'], $users)){
		$valid   = false;
		$message = $username . ' is not a valid username';
	} else {
		$result = mysqli_query($mysql_connect, "SELECT * FROM TEMPUSERS WHERE USERNAME='$username'") or die(mysqli_error());
		if (mysqli_num_rows($result) > 0){
			$valid   = false;
			$message = 'This username is not available';
		}
	}
}

if (isset($_POST['email'])){
	$email = mysqli_real_escape_string($mysql_connect, $_POST['email']);
	foreach ($users as $k => $v) {
		if ($email == $v) {
			$valid   = false;
			$message = 'The email is not available';
			break;
		}
	}
	
	if ($valid != false){
		$result = mysqli_query($mysql_connect, "SELECT * FROM TEMPUSERS WHERE EMAIL='$email'") or die(mysqli_error());
		if (mysqli_num_rows($result) > 0){
			$valid   = false;
			$message = 'A user is already registered with this email';
		}
	}
}

echo json_encode(
		$valid ? array('valid' => $valid) : array('valid' => $valid, 'message' => $message)
);
?>