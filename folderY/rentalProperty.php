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
  <script type="text/javascript" src="../js/rentalProperty.js"></script>
 
</head>
<body>  
	<div class="container">
	  	<?php headerCode(); ?>
	  		<div class='row'>
	  				<div class='col-sm-1'></div>
  					<div class='col-sm-8'>
			  			<ul class="nav nav-tabs">
					  	<li class="active"><a data-toggle="tab" href="#location">Location</a></li>
					  	<li><a data-toggle="tab" href="#contactInfo">Contact Info</a></li>
					  	<li><a data-toggle="tab" href="#basicDetails">Basic Details</a></li>
					  	<li><a data-toggle="tab" href="#photosMedia">Photos &amp; Media</a></li>
					  	<li><a data-toggle="tab" href="#description">Description</a></li>
					  	<li><a data-toggle="tab" href="#review">Review</a></li>
					  	<li><a data-toggle="tab" href="#listingStatus">Listing Status</a></li>
						</ul>
					<form name="rentalLocation" class="form-horizontal" role="form">
						<div class="tab-content">
							<div id="location" class="tab-pane fade in active">
								<h3>Location</h3>
								<div class="form-group">
									<div class="col-sm-7">
										<label for="streetaddress">Street Address:</label>
										<input type="text" class="form-control" id="street">
									</div>
									<div class="col-sm-2">
										<label for="unit">Unit:</label>
										<input type="text" class="form-control" id="unit">
									</div>
								</div>
							    <div class="form-group form-inline">
							    	<div class="col-sm-9">
										<select class="form-control input-sm" name="province" id="province" onchange="getplaces(this.value,'region');">
											<option value="<?=$_POST['province']?>"> </option>
									    </select>
										<select class="form-control input-sm" name="region" id="region" onchange="getplaces(this.value,'city');">
											<option value="<?=$_POST['region']?>">-- Select Division --</option>
									    </select>
										<select class="form-control input-sm" name="city" id="city">
											<option value="<?=$_POST['city']?>">-- Select City --</option>
									    </select>
								    </div>
								</div>
								<div class="form-group">
									<div class="col-sm-9">
										<ul class="pager">
										  <li><a href="#">Next</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div id="contactInfo" class="tab-pane fade">
							    <h3>Contact Information</h3>
							    <div class="form-group">
								    	<div class="col-sm-9">
								    	<label for="forrentby">For Rent By:</label>
									    <div class="radio">
										  <label><input type="radio" name="optradio">Management Company/Broker</label>
										</div>
										<div class="radio">
										  <label><input type="radio" name="optradio">Owner</label>
										</div>
										<div class="radio disabled">
										  <label><input type="radio" name="optradio">Tenant</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9">
										<label for="propertyname">Property Name:</label>
										<input type="text" class="form-control" id="propertyname">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9">
										<label for="email">Email:</label>
										<input type="text" class="form-control" id="email">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9">
										<label for="phone">Phone:</label>
										<input type="text" class="form-control" id="phone">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9">
										<ul class="pager">
										  <li><a href="#">Previous</a></li>
										  <li><a href="#">Next</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div id="basicDetails" class="tab-pane fade">
							    <h3>Lease Terms</h3>
							    <div class="form-group">
									<div class="col-sm-5">
										<label for="rent">Rent:</label>
										<input type="text" class="form-control" id="rent">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-5">
										<label for="deposit">Deposit:</label>
										<input type="text" class="form-control" id="deposit">
									</div>
									<div class="col-sm-5">
								      <label for="leaseduration">Lease Duration:</label>
									  <select class="form-control" id="leaseduration">
									  	<option>-- Select Length --</option>
									    <option>1 Year</option>
									    <option>6 Months</option>
									    <option>1 Month</option>
									    <option>Rent to Own</option>
									    <option>Sublet/Temporary</option>
									  </select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-5">
										<label for="dateavailable">Date Available:</label>
										<input type="text" class="form-control" id="dateavailable">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
									    <label for="leasedetails">Additional Lease Details:</label>
									    <textarea class="form-control" rows="5" id="leasedetails"></textarea>
							      	</div>
							    </div>
							    <h3>Rental Details</h3>
							    <div class="form-group">
									<div class="col-sm-5">
								      <label for="propertytype">Property Type:</label>
									  <select class="form-control" id="propertytype">
									  	<option>-- Select Type --</option>
									    <option>Apartment</option>
									    <option>Condo</option>
									    <option>Single Family House</option>
									    <option>Townhouse</option>
									    <option>Penthouse</option>
									    <option>Other</option>
									  </select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-5">
								      <label for="bedrooms">Bed Rooms:</label>
									  <select class="form-control" id="bedrooms">
									  	<option>-- Select Beds --</option>
									    <option>Studion</option>
									    <option>1 Bed</option>
									    <option>2 Beds</option>
									    <option>3 Beds</option>
									    <option>4 Beds</option>
									    <option>5 Beds</option>
									    <option>6+ Beds</option>
									  </select>
									</div>
									<div class="col-sm-5">
								      <label for="bathrooms">Bath Rooms:</label>
									  <select class="form-control" id="bathrooms">
									  	<option>-- Select Baths --</option>
									    <option>1 Bath</option>
									    <option>1.5 Baths</option>
									    <option>2 Baths</option>
									    <option>2.5 Baths</option>
									    <option>3 Baths</option>
									    <option>3.5 Baths</option>
									    <option>4 Baths</option>
									    <option>4.5 Baths</option>
									    <option>5 Baths</option>
									    <option>5.5 Baths</option>
									    <option>6+ Baths</option>
									  </select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-5">
										<label for="squarefeet">Square Feet:</label>
										<input type="text" class="form-control" id="squarefeet">
									</div>
									<div class="col-sm-5">
										<label for="unitfloor">Unit Floor:</label>
										<input type="text" class="form-control" id="unitfloor">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-5">
										<label for="yearbuilt">Year Built:</label>
										<input type="text" class="form-control" id="yearbuilt">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-5">
										<div class="checkbox">
										  <label for="furnished"><input type="checkbox" value="">Furnished</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-5">
								      <label for="parkingspaces">Parking Spaces:</label>
									  <select class="form-control" id="parkingspaces">
									  	<option>-- Select --</option>
									    <option>None</option>
									    <option>1</option>
									    <option>2</option>
									    <option>3</option>
									    <option>4+</option>
									  </select>
									</div>
									<div class="col-sm-5">
								      <label for="parkingtype">Parking Type:</label>
									  <select class="form-control" id="parkingtype">
									  	<option>-- Select Type --</option>
									    <option>Garage</option>
									    <option>Carport</option>
									    <option>Off Street</option>
									    <option>Others</option>
									  </select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9">
										<label for="petpolicy">Pet Policy:</label>
									</div>
									<div class="col-sm-9">
										<label class="checkbox-inline"><input type="checkbox" value="">No Pets Allowed</label>
										<label class="checkbox-inline"><input type="checkbox" value="">Dogs OK</label>
										<label class="checkbox-inline"><input type="checkbox" value="">Cats OK</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9">
										<ul class="pager">
										  <li><a href="#">Previous</a></li>
										  <li><a href="#">Next</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div id="photosMedia" class="tab-pane fade">
							    <h3>Photos &amp; Media</h3>
							    <p>Some content in menu 2.</p>
							</div>
							<div id="description" class="tab-pane fade">
							    <h3>Description</h3>
							    <div class="form-group">
									<div class="col-sm-9">
										<label for="propertytitle">Property Title:</label>
										<input type="text" class="form-control" id="propertytitle">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
									    <label for="propertydescription">Property Description:</label>
									    <textarea class="form-control" rows="5" id="propertydescription"></textarea>
							      	</div>
							    </div>
							    <div class="form-group">
									<div class="col-sm-9">
										<label for="propertywebsiteurl">Property Website URL:</label>
										<input type="text" class="form-control" id="propertywebsiteurl">
									</div>
								</div>
								<h3>Unit Features</h3>
								<label for="rooms">Rooms:</label>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Living Room</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Dining Room</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Family Room or Den</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Waiting or Front Room</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Mult-Purpose Hall</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Pooja Room</label>
									</div>
								</div>
								<div class="collapse">
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Dress Room</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Laundary Room</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Utility Room</label>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Kitchen</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Office or Study Room</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Sun Room or Sit Out</label>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Walk-in Closet</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Pantry</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Foyer</label>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Lounge</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Solarium or Atrium</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Basement</label>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Bar</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Store Room</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Maid's Room</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<a href="#" class="more" data-alt="- Hide" data-start="+ Show"><span>+ Show</span> All Rooms</a>
								</div>
								<label for="petpolicy">Exterior:</label>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Private Pool</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Verandah</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Balcony, Deck or Patio</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Open Terrace</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Yard</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Lawn</label>
									</div>
								</div>
								<div class="collapse">
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Pond</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Lake</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Porch</label>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Garden</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Sprinkler System</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Greenhouse</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<a href="#" class="more" data-alt="- Hide" data-start="+ Show"><span>+ Show</span> All Exteriors</a>
								</div>
								<label for="petpolicy">Appliances:</label>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Range or Oven</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Refrigerator</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Dishwasher</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Microwave</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Garbage disposal</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Stainless Steel Appliances</label>
									</div>
								</div>
								<div class="collapse">
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Freezer</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Trash compactor</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<a href="#" class="more" data-alt="- Hide" data-start="+ Show"><span>+ Show</span> All Appliances</a>
								</div>
								<label for="petpolicy">Cooling & Heating:</label>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Central A/C</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Air Conditioning</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Ceiling fans</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Heat: forced air</label>
									</div>
								</div>
								<label for="petpolicy">Wiring:</label>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Cable-ready</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">High-speed Internet</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Wired</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Intercom system</label>
									</div>
								</div>
								<label for="petpolicy">Additional Features:</label>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Tile floor</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Marble floor</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Hardwood floor</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Fireplace</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">High/Vaulted Cealing</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Granite Countertop</label>
									</div>
								</div>
								<h3>Community Features</h3>
								<label for="petpolicy">Building Type:</label>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">New Property</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Waterfront</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Vintage Building</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Loft Layout</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Assisted Living</label>
									</div>
								</div>
								<label for="petpolicy">Security & Access:</label>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Elevator</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Secured Entry</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Controlled Access</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Gated Entry</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Security System</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Doorman</label>
									</div>
								</div>
								<div class="collapse">
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Disability Access</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<a href="#" class="more" data-alt="- Hide" data-start="+ Show"><span>+ Show</span> All Security & Access</a>
								</div>
								<label for="petpolicy">Facilities & Recreation:</label>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Shared Pool</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Fitness Center</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Clubhouse</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Squash Court</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Table Tennis</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Indoor Badminton</label>
									</div>
								</div>
								<div class="collapse">
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Children Play Area</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Tennis Court</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Golf Course</label>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Library</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Business Center</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Billiards Room</label>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Near Transportation</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Spa & Saloon</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Barbecue</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<a href="#" class="more" data-alt="- Hide" data-start="+ Show"><span>+ Show</span> All Facilities & Recreation</a>
								</div>
								<label for="petpolicy">Communal Parking:</label>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Guest Parking</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Off-Street Parking</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Covered Parking</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">On-Street Parking</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Garage - Attached</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Garage - Detached</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9">
										<ul class="pager">
										  <li><a href="#">Previous</a></li>
										  <li><a href="#">Next</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div id="listingStatus" class="tab-pane fade">
							    <h3>Listing Status</h3>
							    <p>Some content in menu 2.</p>
							</div>
							<div class='col-sm-3'></div>
						</div>
					</form>	
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