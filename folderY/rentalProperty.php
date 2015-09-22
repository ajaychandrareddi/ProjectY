<?php
	session_start();
	include("../includes/html_codes.php");
	
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../vendor/bootstrapValidator/css/bootstrapValidator.min.css">
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../vendor/bootstrapValidator/js/bootstrapValidator.min.js"></script>

  
  <!-- Local Use -->
  <link rel="stylesheet" href="../css/main.css">
  <script type="text/javascript" src="../js/header.js"></script>
 
</head>
<body>  
	<div class="container">
	  	<?php headerCode(); ?>
	  		<div class='row'>
	  				<div class='col-sm-1'></div>
  					<div class='col-sm-10'>
			  			<ul class="nav nav-tabs">
					  	<li class="active"><a data-toggle="tab" href="#location">Location</a></li>
					  	<li><a data-toggle="tab" href="#contactInfo">Contact Info</a></li>
					  	<li><a data-toggle="tab" href="#basicDetails">Basic Details</a></li>
					  	<li><a data-toggle="tab" href="#photosMedia">Photos & Media</a></li>
					  	<li><a data-toggle="tab" href="#description">Description</a></li>
					  	<li><a data-toggle="tab" href="#review">Review</a></li>
					  	<li><a data-toggle="tab" href="#listingStatus">Listing Status</a></li>
						</ul>
					
					<div class="tab-content">
					  <div id="location" class="tab-pane fade in active">
					    <h3>Location</h3>
					    <form name="rentalLocation" role="form">
					    
					    </form>
					</div>
					<div id="contactInfo" class="tab-pane fade">
					    <h3>Contact Info</h3>
					    <p>Some content in menu 1.</p>
					</div>
					<div id="basicDetails" class="tab-pane fade">
					    <h3>Basic Details</h3>
					    <p>Some content in menu 2.</p>
					</div>
					<div id="photosMedia" class="tab-pane fade">
					    <h3>Photos & Media</h3>
					    <p>Some content in menu 2.</p>
					</div>
					<div id="description" class="tab-pane fade">
					    <h3>Description</h3>
					    <p>Some content in menu 2.</p>
					</div>
					<div id="listingStatus" class="tab-pane fade">
					    <h3>Listing Status</h3>
					    <p>Some content in menu 2.</p>
					</div>
					<div class='col-sm-1'></div>
					</div>
				</div>
			</div>
	  	<?php footerCode(); ?>           
	</div>
	<?php loginModalCode(); ?>
	<script src="../js/loginValidation.js"></script>
	<?php registerModalCode(); ?>
  	<script src="../js/registerValidation.js"></script> 
</body>
</html>