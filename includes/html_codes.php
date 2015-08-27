<?php

//Code for Header and Search bar
function headerAndSearchCode(){
    echo "
			<div class=\"row\">
	  			<div class=\"col-sm-2\">.col-sm-2</div>
	  			<div class=\"col-sm-7\">.col-sm-7</div>
    			<div class=\"col-sm-3\">
    		";
    		topRightLinks();
			echo '</div>
    		';
}

//Code for Footer bar
function footerCode(){
	echo '
			<div class="row">
			  <div class="col-sm-4">.col-sm-4</div>
			  <div class="col-sm-4">.col-sm-4</div>
			  <div class="col-sm-4">.col-sm-4</div>
			</div>
			';
}

//Code for Top Right Links
function topRightLinks(){
	if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])){
			echo '<a href="register.php">Register</a> | <a href="login.php">Login</a>';
			} else {				
			$user_id = $_SESSION['user_id'];
			echo '<a href="myAccount.php">My Account</a> | <a href="logout.php">Logout</a>';
			}
}

?>