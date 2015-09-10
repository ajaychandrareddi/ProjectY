<?php
	session_start();
	include("../includes/html_codes.php");
	
//	if ($_POST[province]){getplaces(1269750,'province');}
//	if ($_POST[region]){getplaces($_POST[region],'region');}
//	if ($_POST[city]){getplaces($_POST[city],'city');}
	
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
			<div class="container">
	  			<div class='row'>
	  				<div class='col-sm-2'></div>
	  				<div class='col-sm-7'>
	  				<form name="mainLandingSearchForm" class="form-inline" role="form" method="post">
  						<div class="form-group" id="mainLandingSearchBar">
						  <select class="form-control input-sm" id="leftend">
					        <option selected>Buy</option>
					        <option>Rent</option>
					        <option>Recently Sold</option>
					      </select>
						</div>
						<div class="form-group"  id="mainLandingSearchBar">
						  <select class="form-control input-sm" id="sel1">
						  	<option selected>Select State</option>
					        <option></option>

					      </select>
						</div>
						<div class="form-group" id="mainLandingSearchBar">
						  <select class="form-control input-sm" id="sel1">
						  	<option selected>Select Division</option>
					        <option></option>
					      </select>
						</div>
						<div class="form-group" id="mainLandingSearchBar">
						  <select class="form-control input-sm" id="sel1">
						  	<option selected>Select Region</option>
					        <option></option>
					      </select>
						</div>
						<div class="form-group" id="mainLandingSearchBar">
							<a href="#" class="btn btn-info input-sm" id="rightend"><span class="glyphicon glyphicon-search"></span> Search</a>
						</div>
					</form>
					</div>
					<div class='col-sm-3'></div>
			   </div>
			</div>		
	  	<?php footerCode(); ?>           
	</div>
	<?php loginModalCode(); ?>
	<script src="../js/loginValidation.js"></script>
	<?php registerModalCode(); ?>
  	<script src="../js/registerValidation.js"></script>
  	<script src="../js/mainLandingSearch.js"></script>
</body>
</html>