<?php
include("../../includes/dbconnect.php");

header('Content-type: application/json');

 $valid = true;
 $username = $_POST['username'];
 $password = $_POST['password'];
 
	$result = mysqli_query($mysql_connect, "SELECT * FROM TEMPUSERS WHERE USERNAME='$username'") or die(mysql_error());  
	if (mysqli_num_rows($result)==1){
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			$_SESSION['user_id'] = $row['USER_ID'];
			$hash = trim($row['PASSWORD']);
		}
		if (!password_verify($password, $hash)){
			$valid = false;
		}
	} else {
 	$valid = false;
	}
 
 echo json_encode(array(
    'valid' => $valid,
));
?>