<?php
	session_start();
	include("../includes/html_codes.php");

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ListAndMapResults</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../vendor/bootstrapValidator/css/bootstrapValidator.min.css">
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/geonames/js/jsr_class.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../vendor/bootstrapValidator/js/bootstrapValidator.min.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

  
  <!-- Local Use -->
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/propertyListing.css">
  <script type="text/javascript" src="../js/header.js"></script>
  <script type="text/javascript" src="../js/loadMap.js"></script>
 
</head>
<body>  
	<div class="container">
	  	<?php headerCode(); ?>
  			<div class='row'>
  				<div class='col-sm-8'>
  				<form name="mainLandingSearchForm" class="form-inline" role="form" method="post" action="testing.php">
  					<div class="form-group" id="mainLandingSearchBar">
					  <select class="form-control input-sm" name="todo" id="leftend">
				        	<option value="1" selected>Buy</option>
				        	<option value="2" >Rent</option>
				        	<option value="3" >Recently Sold</option>
				      </select>
					</div>
					<div class="form-group"  id="mainLandingSearchBar">
					  <select class="form-control input-sm" name="province" id="province" onchange="getplaces(this.value,'region');">
						  	<option value="<?=$_POST['province']?>"> </option>
				      </select>
					</div>
					<div class="form-group" id="mainLandingSearchBar">
					  <select class="form-control input-sm" name="region" id="region" onchange="getplaces(this.value,'city');">
					  	<option value="<?=$_POST['region']?>">-- Select Division --</option>
				      </select>
					</div>
					<div class="form-group" id="mainLandingSearchBar">
					  <select class="form-control input-sm" name="city" id="city">
					  	<option value="<?=$_POST['city']?>">-- Select City --</option>
				      </select>
					</div>
					<div class="form-group" id="mainLandingSearchBar">
						<button class="btn btn-info input-sm" id="rightend"><span class="glyphicon glyphicon-search"></span> Search</button>
					</div>
				</form>
				</div>
				<div class='col-sm-4'></div>
		  	</div>
				
			<div class='row'>
  				<div class='col-sm-10'>
					<ul class="nav nav-tabs">
					  <li class="active"><a data-toggle="tab" href="#list">LIST</a></li>
					  <li><a data-toggle="tab" href="#showmap" onclick="load()">MAP</a></li>
					</ul>
					
					<div class="tab-content">
						 <div id="list" class="tab-pane fade in active">
						   <div class="well well-lg">Large Well</div>
						 	<div class='row'>
			  					<div class='col-sm-10'>
									<ul class="pager">
										 <li><a href="#">Previous</a></li>
										 <li><a href="#">Next</a></li>
									</ul>
								</div>
								<div class='col-sm-1'></div>
							</div>	
						 </div>
						 <div id="showmap" class="tab-pane fade">
						 	<div id="map" style="width: 1000px; height: 800px"></div>
						 </div>
					</div>
				</div>
			</div>	
			
	  	<?php footerCode(); ?>           
	</div>
	<?php loginModalCode(); ?>
	<script src="../js/loginValidation.js"></script>
	<?php registerModalCode(); ?>
  	<script src="../js/registerValidation.js"></script>
  	<script src="../js/geonames.js"></script>
  	<script>
	  	window.onload = function() {
	        <?php  
	                echo 'getplaces(1269750,\'province\');'."\n";
	            
	        ?>
	    };
  	</script>
</body>
</html>