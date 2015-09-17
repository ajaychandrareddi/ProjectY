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

  
  <!-- Local Use -->
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/propertyListing.css">
  <script type="text/javascript" src="../js/header.js"></script>
 
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
					  <li><a data-toggle="tab" href="#map">MAP</a></li>
					</ul>
					
					<div class="tab-content">
						 <div id="list" class="tab-pane fade in active">
						   <div class="well well-lg">Large Well</div>
						 </div>
						 <div id="map" class="tab-pane fade">
						   <h3>MAP</h3>
						   <p>Some content in menu 1.</p>
						 </div>
					</div>
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
			</div>	
			
	  	<?php footerCode(); ?>           
	</div>
	<?php loginModalCode(); ?>
	<script src="../js/loginValidation.js"></script>
	<?php registerModalCode(); ?>
  	<script src="../js/registerValidation.js"></script>
  	<script>
	    var whos=null;
	    function getplaces(gid,src)
	    {	
	    	whos = src;
	    	var request = "http://www.geonames.org/childrenJSON?geonameId="+gid+"&callback=listPlaces&style=long&lang=fr";
	    	aObj = new JSONscriptRequest(request);
	    	aObj.buildScriptTag();
	    	aObj.addScriptTag();
	    }
	    
	    function listPlaces(jData)
	    {
	    	counts = jData.geonames.length<jData.totalResultsCount ? jData.geonames.length : jData.totalResultsCount;
	    	who = document.getElementById(whos);
	    	who.options.length = 0;
	    	
	    	if(counts) {
	    		if (whos=='province'){
		    		who.options[who.options.length] = new Option('-- Select State --','')
	    		} else if (whos=='region'){
	    			who.options[who.options.length] = new Option('-- Select Division --','')
	    		} else {
	    			who.options[who.options.length] = new Option('-- Select City --','')
	    		}		    		
	    	} else {
		    	who.options[who.options.length] = new Option('No Data Available','NULL')
	    	}
	    		
	    	for(var i=0;i<counts;i++){
		    	
				if (jData.geonames[i].geonameId == <?=$_POST['province']?>){
	    		who.options[who.options.length] = new Option(jData.geonames[i].name,jData.geonames[i].geonameId, false, true)
				} else {
	    		who.options[who.options.length] = new Option(jData.geonames[i].name,jData.geonames[i].geonameId)
	    		}
	    	}
	    	
	    	delete jData;
	    	jData = null;
		
	    }
	    
	    window.onload = function() {
	        <?php  
	                echo 'getplaces(1269750,\'province\');'."\n";
	        ?>
  
	    };
	</script>
	<script src="../js/mainLanding.js"></script>
</body>
</html>