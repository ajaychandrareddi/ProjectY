<?php
include("../includes/dbconnect.php");

header('Content-type: application/json');

$valid = true;
$users = array(
		'admin'         => 'admin@streetview.com',
		'administrator' => 'administrator@streetview.com',
		'root'          => 'root@streeview.com',
);

$username = $_POST['username'];
$email = mysqli_real_escape_string($mysql_connect, $_POST['email']);
$password = mysqli_real_escape_string($mysql_connect, $_POST['password']);
if (isset($_POST['role'])){
	$role = '3';
} else {
	$role = '2';
}

$result = mysqli_query($mysql_connect, "SELECT * FROM TEMPUSERS WHERE USERNAME='$username' OR EMAIL='$email'") or die(mysql_error());

if (isset($_POST['username']) && (array_key_exists($_POST['username'], $users) || mysqli_num_rows($result) > 0)) {
	$valid   = false;
	$message = 'This username is not available';
} else {
	$activation = md5(uniqid(rand(), true));
	$options = [
			'cost' => 8,
	];
	$password = password_hash($password, PASSWORD_BCRYPT, $options)."\n";
	$result2 = mysqli_query($mysql_connect,"INSERT INTO tempusers (USERNAME, ROLE, EMAIL, PASSWORD, ACTIVATION, UPDATED_TIMESTAMP, CREATED_TIMESTAMP) VALUES ('$username', '$role', '$email', '$password', '$activation', now(), now())");
}

echo json_encode(
		$valid ? array('valid' => $valid) : array('valid' => $valid, 'message' => $message)
);
?>