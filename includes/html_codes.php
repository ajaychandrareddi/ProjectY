<?php

//Code for Header and Search bar
function headerAndSearchCode(){
    echo "
			<div class='row'>
    			<div class='col-sm-1'></div>
	  			<div class='col-sm-1'><img src=\"C:/xampp/htdocs/ProjectX/images/home.png\"></div>
	  			<div class='col-sm-6'>
    				<div class='btn-group btn-group-lg'>
	    				<a href='#' class='btn btn-primary' title='Header' data-toggle='popover' data-trigger='hover' data-placement='bottom' data-content='#'>Buy</a>
					    <a href='#' class='btn btn-primary' title='Header' data-toggle='popover' data-trigger='hover' data-placement='bottom' data-content='#'>Sell</a>
					    <a href='#' class='btn btn-primary' title='Header' data-toggle='popover' data-trigger='hover' data-placement='bottom' data-content='#'>Rent</a>
					    <a href='#' class='btn btn-primary' title='Header' data-toggle='popover' data-trigger='hover' data-placement='bottom' data-content='#'>Home Loans</a>
					    <a href='#' class='btn btn-primary' title='Header' data-toggle='popover' data-trigger='hover' data-placement='bottom' data-content='#'>Find an Agent</a>
					    <a href='#' class='btn btn-primary' title='Header' data-toggle='popover' data-trigger='hover' data-placement='bottom' data-content='#'>More</a>
				    </div>
    		    </div>
    			<div class='col-sm-4'>
    		";
    		topRightLinks();
			echo '</div>
			  </div>
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
			echo '<a href="register.php"><span class="glyphicon glyphicon-user"></span> Register</a> | <a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>';
			} else {				
			$user_id = $_SESSION['user_id'];
			echo '<a href="myAccount.php">My Account</a> | <a href="logout.php">Logout</a>';
			}
}

?>