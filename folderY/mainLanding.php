<?php
	session_start();
	include("../includes/html_codes.php");	
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>MainLanding</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../vendor/bootstrapValidator/css/bootstrapValidator.min.css">
  <script src="../vendor/jquery/js/jquery.min.js"></script>
  <script src="../vendor/geonames/js/jsr_class.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../vendor/bootstrapValidator/js/bootstrapValidator.min.js"></script>

  
  <!-- Local Use -->
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/mainLanding.css">
  <script type="text/javascript" src="../js/header.js"></script>
 
</head>
<body>  
	<div class="container">
	  	<?php headerCode(); ?>
					<div>
			  			  <div class='row'>
			  				<div class='col-sm-2'></div>
			  				<div class='col-sm-9'>
			  				<form name="mainLandingSearchForm" class="form-inline" role="form" method="post" action="propertyListing.php">
		  						<div class="form-group" id="mainLandingSearchBar">
								  <select class="form-control input-sm" name="todo" id="leftend">
							        <option value="1" selected>Buy</option>
							        <option value="2" >Rent</option>
							        <option value="3" >Recently Sold</option>
							      </select>
								</div>
								<div class="form-group"  id="mainLandingSearchBar">
								  <select class="form-control input-sm" name="province" id="province" onchange="getplaces(this.value,'region');">
								  	<option value="<?=$_POST['province']?>"></option>
							      </select>
								</div>
								<div class="form-group" id="mainLandingSearchBar">
								  <select class="form-control input-sm" name="region" id="region" onchange="getplaces(this.value,'city');">
								  	<option selected value="<?=$_POST['region']?>">-- Select Division --</option>
							      </select>
								</div>
								<div class="form-group" id="mainLandingSearchBar">
								  <select class="form-control input-sm" name="city" id="city">
								  	<option selected value="<?=$_POST['city']?>">-- Select City --</option>
							      </select>
								</div>
								<div class="form-group" id="mainLandingSearchBar">
									<button class="btn btn-info input-sm" id="rightend"><span class="glyphicon glyphicon-search"></span> Search</button>
								</div>
							</form>
							</div>
							<div class='col-sm-1'></div>
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
	            if (isset($_POST['province'])){ 
	                echo 'getplaces('.$_POST['province'].',\'province\');'."\n";
	            }else{ 
	                echo 'getplaces(1269750,\'province\');'."\n";
	            }
	            if (isset($_POST['region'])) 
	            {
	            	echo 'getplaces('.$_POST['region'].',\'region\');'."\n";
	            }
	            if (isset($_POST['city']))
	            {
	            	echo 'getplaces('.$_POST['city'].',\'city\');'."\n";
	            }
	        ?>
	    };
	</script>
</body>
</html>