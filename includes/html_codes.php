<?php

//Code for Header and Search bar
function headerCode(){
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
			echo '<a href="#" data-toggle="modal" data-target="#registerModal"><span class="glyphicon glyphicon-user"></span> Register</a> | <a href="#" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a>';
			} else {				
			$user_id = $_SESSION['user_id'];
			echo '<a href="myAccount.php">My Account</a> | <a href="logout.php">Logout</a>';
			}
}

//Code for Login Modal
function loginModalCode(){
echo "
		  <div class='modal fade' id='loginModal' role='dialog'>
		    <div class='modal-dialog'>
		      <div class='modal-content'>
		        <div class='modal-header'>
		          <button type='button' class='close' data-dismiss='modal'>&times;</button>
		          <h4><span class='glyphicon glyphicon-lock'></span> Login</h4>
		        </div>
		        <div class='modal-body'>
		          <form id='loginForm' role='form' method='post' action='#'>
		            <div class='form-group'>
		              <label for='username'><span class='glyphicon glyphicon-user'></span> Username</label>
		              <input type='text' id='username' name='username' class='form-control' placeholder='Enter Username'>
		            </div>
		            <div class='form-group'>
		              <label for='password'><span class='glyphicon glyphicon-eye-open'></span> Password</label>
		              <input type='text' id='password' name='password' class='form-control' placeholder='Enter Password'>
		            </div>
					<div>
			            <div class='checkbox'>
			              <label><input type='checkbox' value='' checked>Remember me</label>
			            </div>
						<p class='pull-right'><a href='#'>Forgot Password?</a></p>
					</div>
		              <button type='submit' class='btn btn-primary'><span class='glyphicon glyphicon-off'></span> Login</button>
					  <button type='submit' class='btn btn-default' data-dismiss='modal'><span class='glyphicon glyphicon-remove'></span> Cancel</button>
		          </form>
		        </div>
		       </div>

			</div>
		  </div>
			";
}


//Code for Registration Modal
function registerModalCode(){
echo '
		<div class="modal fade" id="registerModal" name="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					  <h4><span class="glyphicon glyphicon-lock"></span> New Account</h4>
					</div>
					<div class="modal-body">
					  <form id="registerForm" role="form" method="post" action="post.php">
					    <div class="form-group">
					      <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
					      <input type="text" id="username" name="username" class="form-control" placeholder="Enter Username">
					    </div>
							<div class="form-group">
					      <label for="email"><span class="glyphicon glyphicon-envelope"></span> Email</label>
					      <input type="text" id="email" name="email" class="form-control" placeholder="Enter Email">
					    </div>
					    <div class="form-group">
					      <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
					      <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
					    </div>
						<div class="form-group">
						    <div class="checkbox">
						      <label><input type="checkbox" value="">I am an Industry Professional</label>
						    </div>
						</div>
						<div class="form-group">
					       <button type="submit" id="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-thumbs-up"></span> Register</button>
						   <button type="submit" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
						</div>
					  </form>
					</div>
				</div>
			</div>
		</div>
		';
}

?>