<?php

//Code for Header and Search bar
function headerAndSearchCode(){
    echo "
			<div class='row'>
    			<div class='col-sm-1' id='cssTopRightLinks'></div>
	  			<div class='col-sm-1'>
    				<div id='cssTopLeftLogo'>
    					<img src=\"C:/xampp/htdocs/ProjectX/images/home.png\">
    				</div>
    			</div>
	  			<div class='col-sm-6'>
    				<div class='btn-group btn-group-lg' id='cssMenu'>
	    				<a href='#' class='btn btn-primary' id='buyDataToggle' data-trigger='hover' data-placement='bottom'>Buy</a>
    						<div id='buyPopoverContent' class='hide'>
						      Here goes content for buy
						    </div>
					    <a href='#' class='btn btn-primary' id='sellDataToggle' data-trigger='hover' data-placement='bottom'>Sell</a>
    						<div id='sellPopoverContent' class='hide'>
						      Here goes content for Sell
						    </div>
					    <a href='#' class='btn btn-primary' id='rentDataToggle' data-trigger='hover' data-placement='bottom'>Rent</a>
    						<div id='rentPopoverContent' class='hide'>
						      Here goes content for Rent
						    </div>
					    <a href='#' class='btn btn-primary' id='loansDataToggle' data-trigger='hover' data-placement='bottom'>Home Loans</a>
    						<div id='loansPopoverContent' class='hide'>
						      Here goes content for Home Loans
						    </div>
					    <a href='#' class='btn btn-primary' id='agentDataToggle' data-trigger='hover' data-placement='bottom'>Find an Agent</a>
    						<div id='agentPopoverContent' class='hide'>
						      Here goes content for Find an Agent
						    </div>
					    <a href='#' class='btn btn-primary' id='newsDataToggle' data-trigger='hover' data-placement='bottom'>News & Advise</a>
    						<div id='newsPopoverContent' class='hide'>
						      Here goes content for News & Advise
						    </div>
				    </div>
    		    </div>
    			<div class='col-sm-2' id='cssTopRightLinks'>
    		";
    		topRightLinks();
			echo "</div>
				<div class='col-sm-2' id='cssTopRightLinks'></div>
			  </div>
    		";
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