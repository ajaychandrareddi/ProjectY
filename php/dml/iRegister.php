<?php
include("../../includes/dbconnect.php");

header('Content-type: application/json');

 $valid = true;
 $username = $_POST['username'];
 $email = mysqli_real_escape_string($mysql_connect, $_POST['email']);
 $password = mysqli_real_escape_string($mysql_connect, $_POST['password']);
	 $options = [
	 	 'cost' => 8,
	 ];
	 $password = password_hash($password, PASSWORD_BCRYPT, $options)."\n"; 
	 
 if (isset($_POST['role'])){
 	$role = '3';
 } else {
 	$role = '2';
 }
  
 $activation = md5(uniqid(rand(), true));
 
 $result = $result = mysqli_query($mysql_connect,"INSERT INTO tempusers (USERNAME, ROLE, EMAIL, PASSWORD, ACTIVATION, UPDATED_TIMESTAMP, CREATED_TIMESTAMP) VALUES ('$username', '$role', '$email', '$password', '$activation', now(), now())")  or die(mysql_error());
   
 if (!$result){
 	$valid = false;
 }

 
echo json_encode(array(
     'valid' => $valid,
));
?>