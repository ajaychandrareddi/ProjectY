<?php
	session_start();
	include("../includes/html_codes.php");
	
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Template</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../vendor/bootstrapValidator/css/bootstrapValidator.min.css">
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../vendor/bootstrapValidator/js/bootstrapValidator.min.js"></script>

  
  <!-- Local Use -->
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/mainLanding.css">
  <script type="text/javascript" src="../js/header.js"></script>
 
</head>
<body>  
	<div class="container-fluid">
	  	<?php headerCode(); ?>

	  			<div class='row'>
	  				<div class='col-sm-3'></div>
	  				<div class='col-sm-6'>
	  				<form class="form-inline" role="form">
  						<div class="form-group">
			  				<div class="dropdown" id="mainLandingSearchBar">
							  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Buy
							  <span class="caret"></span></button>
							  <ul class="dropdown-menu">
							    <li><a href="#">HTML</a></li>
							    <li><a href="#">CSS</a></li>
							    <li><a href="#">JavaScript</a></li>
							  </ul>
							</div>
						</div>
						<div class="form-group">
							<div class="dropdown" id="mainLandingSearchBar">
							  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Select State
							  <span class="caret"></span></button>
							  <ul class="dropdown-menu">
							    <li><a href="#">HTML</a></li>
							    <li><a href="#">CSS</a></li>
							    <li><a href="#">JavaScript</a></li>
							  </ul>
							</div>
						</div>
						<div class="form-group">
							<div class="dropdown" id="mainLandingSearchBar">
							  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Select Divison
							  <span class="caret"></span></button>
							  <ul class="dropdown-menu">
							    <li><a href="#">HTML</a></li>
							    <li><a href="#">CSS</a></li>
							    <li><a href="#">JavaScript</a></li>
							  </ul>
							</div>
						</div>
						<div class="form-group">
							<div class="dropdown" id="mainLandingSearchBar">
							  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Select City
							  <span class="caret"></span></button>
							  <ul class="dropdown-menu">
							    <li><a href="#">HTML</a></li>
							    <li><a href="#">CSS</a></li>
							    <li><a href="#">JavaScript</a></li>
							  </ul>
							</div>
						</div>
						<div class="form-group">
							<div id="mainLandingSearchBar">
								<a href="#" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> Search</a>
							</div>
						</div>
					</form>
					</div>
					<div class='col-sm-3'></div>
			   </div>
					
	  	<?php footerCode(); ?>           
	</div>
	<?php loginModalCode(); ?>
	<script src="../js/loginValidation.js"></script>
	<?php registerModalCode(); ?>
  	<script src="../js/registerValidation.js"></script> 
</body>
</html>