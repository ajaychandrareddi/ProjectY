<?php
	session_start();
	include("../includes/html_codes.php");
	
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rental Property</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../vendor/bootstrapValidator/css/bootstrapValidator.min.css">
  <link rel="stylesheet" href="../vendor/bootstrapValidator/css/bootstrap-datetimepicker.min.css">
  <link rel="stylesheet" href="../vendor/blueimp/css/blueimp-gallery.min.css">
  <link rel="stylesheet" href="../vendor/jquery/css/jquery.fileupload.css">
  <link rel="stylesheet" href="../vendor/jquery/css/jquery.fileupload-ui.css">
  
  <!-- Local Use -->
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/rentalProperty.css">

</head>
<body>  
	<div class="container">
	  	<?php headerCode(); ?>
	  		<div class='row'>
	  				<div class='col-sm-1'></div>
  					<div class='col-sm-9'>
			  			<ul class="nav nav-tabs">
						  	<li class="active"><a data-toggle="tab" href="#location">Location <i class="fa"></i></a></li>
						  	<li><a data-toggle="tab" href="#contactInfo">Contact Info <i class="fa"></i></a></li>
						  	<li><a data-toggle="tab" href="#basicDetails">Basic Details <i class="fa"></i></a></li>
						  	<li><a data-toggle="tab" href="#photosMedia">Photos &amp; Media <i class="fa"></i></a></li>
						  	<li><a data-toggle="tab" href="#description">Description <i class="fa"></i></a></li>
						  	<li><a data-toggle="tab" href="#preview">Review</a></li>
						  	<li><a data-toggle="tab" href="#listingStatus">Listing Status</a></li>
						</ul>
					<form id="rentalPropertyForm" name="rentalPropertyForm" class="form-horizontal" role="form">
						<div class="tab-content">
							<div id="location" class="tab-pane fade in active">
								<h3>Location</h3>
								<div class="form-group">
									<div class="col-sm-7">
										<label for="streetaddress">Street Address:</label>
										<input type="text" class="form-control" id="streetAddress" name="streetAddress">
									</div>
									<div class="col-sm-2">
										<label for="unit">Unit:</label>
										<input type="text" class="form-control" id="unit" name="unit">
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
										<ul class="nav pager">
										  <li><a data-toggle="tab" href="#contactInfo">Next</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div id="contactInfo" class="tab-pane fade">
							    <h3>Contact Information</h3>
							    <div class="form-group">
								    	<div class="col-sm-9">
								    	<label for="forRentBy">For Rent By:</label>
									    <div class="radio">
										  <label><input type="radio" name="forRentBy[]">Management Company/Broker</label>
										</div>
										<div class="radio">
										  <label><input type="radio" name="forRentBy[]">Owner</label>
										</div>
										<div class="radio">
										  <label><input type="radio" name="forRentBy[]">Tenant</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9">
										<label for="contactName">Contact Name:</label>
										<input type="text" class="form-control" id="contactName" name="contactName">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9">
										<label for="companyName">Company Name:</label>
										<input type="text" class="form-control" id="companyName" name="companyName">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9">
										<label for="email">Email:</label>
										<input type="text" class="form-control" id="email" name="email">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9">
										<label for="phone">Phone:</label>
										<input type="text" class="form-control" id="phone" name="phone">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9">
										<ul class="pager">
										  <li><a data-toggle="tab" href="#location">Previous</a></li>
										  <li><a data-toggle="tab" href="#basicDetails">Next</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div id="basicDetails" class="tab-pane fade">
							    <h3>Lease Terms</h3>
							    <div class="form-group">
									<div class="col-sm-5">
										<label for="rentAmount">Rent:</label>
										<div class="input-group">
											<span class="input-group-addon">
								                    <span>&#8377;</span>
								            </span>
											<input type="text" class="form-control" id="rentAmount" name="rentAmount">
											<span class="input-group-addon">
								                    <span>.00</span>
								            </span>
							            </div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-5">
										<label for="depositAmount">Deposit:</label>
										<div class="input-group">
											<span class="input-group-addon">
								                    <span>&#8377;</span>
								            </span>
											<input type="text" class="form-control" id="depositAmount" name="depositAmount">
											<span class="input-group-addon">
								                    <span>.00</span>
								            </span>
							            </div>
									</div>
									<div class="col-sm-5">
								      <label for="leaseDuration">Lease Duration:</label>
									  <select class="form-control" id="leaseDuration" name="leaseDuration">
									  	<option value="-1">-- Select Length --</option>
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
										<label for="dateAvailable">Date Available:</label>
										<div class="input-group date" id="dateAvailablePicker">
											<input type="text" class="form-control" name="dateAvailable">
											<span class="input-group-addon">
							                    <span class="glyphicon glyphicon-calendar"></span>
							                </span>
							            </div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
									    <label for="leaseDetails">Additional Lease Details:</label>
									    <textarea class="form-control" rows="5" id="leaseDetails" name="leaseDetails"></textarea>
							      	</div>
							    </div>
							    <h3>Rental Details</h3>
							    <div class="form-group">
									<div class="col-sm-5">
								      <label for="propertyType">Property Type:</label>
									  <select class="form-control" id="propertyType" name="propertyType">
									  	<option value="-1">-- Select Type --</option>
									    <option>Apartment</option>
									    <option>Condo</option>
									    <option>Single Family House</option>
									    <option>Townhouse</option>
									    <option>Penthouse</option>
									    <option>Other</option>
									  </select>
									</div>
									<div class="col-sm-5">
										<div class="checkbox">
											<br>
										  <label for="roomForRent"><input type="checkbox" id="roomForRent" name="roomForRent" value="Room for Rent">Room for Rent</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-5">
								      <label for="bedrooms">Bed Rooms:</label>
									  <select class="form-control" id="bedrooms" name="bedrooms">
									  	<option value="-1">-- Select Beds --</option>
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
									  <select class="form-control" id="bathrooms" name="bathrooms">
									  	<option value="-1">-- Select Baths --</option>
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
										<label for="squareFeet">Square Feet:</label>
										<input type="text" class="form-control" id="squareFeet" name="squareFeet">
									</div>
									<div class="col-sm-5">
										<label for="unitFloor">Unit Floor:</label>
										<input type="text" class="form-control" id="unitFloor" name="unitFloor">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-5">
										<label for="yearBuilt">Year Built:</label>
										<div class="input-group date" id="yearBuiltPicker">
											<input type="text" class="form-control" name="yearBuilt">
											<span class="input-group-addon">
							                    <span class="glyphicon glyphicon-calendar"></span>
							                </span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-5">
										<div class="checkbox">
										  <label for="furnished"><input type="checkbox" id="furnished" name="furnished">Furnished</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-5">
								      <label for="parkingSpaces">Parking Spaces:</label>
									  <select class="form-control" id="parkingSpaces" name="parkingSpaces">
									  	<option value="-1">-- Select --</option>
									    <option>None</option>
									    <option>1</option>
									    <option>2</option>
									    <option>3</option>
									    <option>4+</option>
									  </select>
									</div>
									<div class="col-sm-5">
								      <label for="parkingType">Parking Type:</label>
									  <select class="form-control" id="parkingType" name="parkingType">
									  	<option value="-1">-- Select Type --</option>
									    <option>Garage</option>
									    <option>Carport</option>
									    <option>Off Street</option>
									    <option>Others</option>
									  </select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9">
										<label for="petPolicy">Pet Policy:</label>
									</div>
									<div class="col-sm-9">
										<label class="checkbox-inline"><input type="checkbox" id="petPolicy" name="petPolicy" value="No Pets Allowed">No Pets Allowed</label>
										<label class="checkbox-inline"><input type="checkbox" id="petPolicy" name="petPolicy" value="Dogs OK">Dogs OK</label>
										<label class="checkbox-inline"><input type="checkbox" id="petPolicy" name="petPolicy" value="Cats OK">Cats OK</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9">
										<ul class="pager">
										  <li><a data-toggle="tab" href="#contactInfo">Previous</a></li>
										  <li><a data-toggle="tab" href="#photosMedia">Next</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div id="photosMedia" class="tab-pane fade">
							    <h3>Photos &amp; Media</h3>
							    <label for="photos">Photos:</label>
							    <div class="form-group">
							    	<div  class="col-sm-12">
								        <h5>You can upload unlimited number of photos. 
								        Choose the image files you want by clicking on the button below. 
								        If you prefer, you may also drag your photos onto the dropzone below..
								        </h5>
							        </div>
							        <div id="fileupload">
								        <div class="col-sm-12">
											<div class="jumbotron" id="photosDropZone">
													<span class="glyphicon glyphicon-cloud-upload"></span>
													<h4>Drag &amp; Drop to Upload Photos or</h4>
												    <span class="btn btn-default fileinput-button">
												        <i class="glyphicon glyphicon-upload"></i>
												        <span>Select files...</span>
												        <input type="file" name="files[]" multiple accept=".jpg,.jpeg,.pjpeg,.gif,.png">
												    </span>
										    </div>
										</div>
										<div class="col-sm-12">
											<div role="presentation" class="files"></div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9">
										<ul class="pager">
										  <li><a data-toggle="tab" href="#basicDetails">Previous</a></li>
										  <li><a data-toggle="tab" href="#description">Next</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div id="description" class="tab-pane fade">
							    <h3>Description</h3>
							    <div class="form-group">
									<div class="col-sm-9">
										<label for="propertyTitle">Property Title:</label>
										<input type="text" class="form-control" id="propertyTitle" name="propertyTitle">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9">
									    <label for="propertyDescription">Property Description:</label>
									    <textarea class="form-control" rows="5" id="propertyDescription" name="propertyDescription"></textarea>
							      	</div>
							    </div>
							    <div class="form-group">
									<div class="col-sm-9">
										<label for="propertyWebsiteUrl">Property Website URL:</label>
										<input type="text" class="form-control" id="propertyWebsiteUrl" name="propertyWebsiteUrl">
									</div>
								</div>
								<h3>Unit Features</h3>
								<label for="rooms">Rooms:</label>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" id="amenities[rooms]" name="amenities[rooms]" value="Living Room">Living Room</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" id="amenities[rooms]" name="amenities[rooms]" value="Dining Room">Dining Room</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" id="amenities[rooms]" name="amenities[rooms]" value="Family Room or Den">Family Room or Den</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" id="amenities[rooms]" name="amenities[rooms]" value="Waiting or Front Room">Waiting or Front Room</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" id="amenities[rooms]" name="amenities[rooms]" value="Mult-Purpose Hall">Mult-Purpose Hall</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" id="amenities[rooms]" name="amenities[rooms]" value="Pooja Room">Pooja Room</label>
									</div>
								</div>
								<div id="Rooms" title="Rooms" class="collapse">
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" id="amenities[rooms]" name="amenities[rooms]" value="Dress Room">Dress Room</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" id="amenities[rooms]" name="amenities[rooms]" value="Laundary Room">Laundary Room</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" id="amenities[rooms]" name="amenities[rooms]" value="Utility Room">Utility Room</label>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" id="amenities[rooms]" name="amenities[rooms]" value="Kitchen">Kitchen</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" id="amenities[rooms]" name="amenities[rooms]" value="Office or Study Room">Office or Study Room</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" id="amenities[rooms]" name="amenities[rooms]" value="Sun Room or Sit Out">Sun Room or Sit Out</label>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" id="amenities[rooms]" name="amenities[rooms]" value="Walk-in Closet">Walk-in Closet</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" id="amenities[rooms]" name="amenities[rooms]" value="Pantry">Pantry</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" id="amenities[rooms]" name="amenities[rooms]" value="Foyer">Foyer</label>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" id="amenities[rooms]" name="amenities[rooms]" value="Lounge">Lounge</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" id="amenities[rooms]" name="amenities[rooms]" value="Solarium or Atrium">Solarium or Atrium</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" id="amenities[rooms]" name="amenities[rooms]" value="Basement">Basement</label>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" id="amenities[rooms]" name="amenities[rooms]" value="Bar">Bar</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" id="amenities[rooms]" name="amenities[rooms]" value="Store Room">Store Room</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" id="amenities[rooms]" name="amenities[rooms]" value="Maid's Room">Maid &#39;s Room</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<a id="moreRooms" class="accordion-toggle" data-toggle="collapse" href="#Rooms">+ Show More Rooms</a>
								</div>
								<label for="exterior">Exterior:</label>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" id="amenities[exterior]" name="amenities[exterior]" value="Private Pool">Private Pool</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" id="amenities[exterior]" name="amenities[exterior]" value="Verandah">Verandah</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" id="amenities[exterior]" name="amenities[exterior]" value="Balcony, Dec or Patio">Balcony, Deck or Patio</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" id="amenities[exterior]" name="amenities[exterior]" value="Open Terrace">Open Terrace</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" id="amenities[exterior]" name="amenities[exterior]" value="Yard">Yard</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" id="amenities[exterior]" name="amenities[exterior]" value="Lawn">Lawn</label>
									</div>
								</div>
								<div id="Exteriors" title="Exteriors" class="collapse">
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" id="amenities[exterior]" name="amenities[exterior]" value="Pond">Pond</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" id="amenities[exterior]" name="amenities[exterior]" value="Lake">Lake</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" id="amenities[exterior]" name="amenities[exterior]" value="Porch">Porch</label>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" id="amenities[exterior]" name="amenities[exterior]" value="Garden">Garden</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" id="amenities[exterior]" name="amenities[exterior]" value="Sprinkler System">Sprinkler System</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" id="amenities[exterior]" name="amenities[exterior]" value="Greenhouse">Greenhouse</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<a id="moreExteriors" class="accordion-toggle" data-toggle="collapse" href="#Exteriors">+ Show More Exteriors</a>
								</div>
								<label for="appliances">Appliances:</label>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" id="amenities[appliances]" name="amenities[appliances]" value="Range or Oven">Range or Oven</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" id="amenities[appliances]" name="amenities[appliances]" value="Refrigerator">Refrigerator</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" id="amenities[appliances]" name="amenities[appliances]" value="Dishwasher">Dishwasher</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" id="amenities[appliances]" name="amenities[appliances]" value="Microwave">Microwave</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" id="amenities[appliances]" name="amenities[appliances]" value="Garbage disposal">Garbage disposal</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" id="amenities[appliances]" name="amenities[appliances]" value="Stainless Steel Appliances">Stainless Steel Appliances</label>
									</div>
								</div>
								<div id="Appliances" title="Appliances" class="collapse">
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" id="amenities[appliances]" name="amenities[appliances]" value="Freezer">Freezer</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" id="amenities[appliances]" name="amenities[appliances]" value="Trash compactor">Trash compactor</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<a id="moreAppliances" class="accordion-toggle" data-toggle="collapse" href="#Appliances">+ Show More Appliances</a>
								</div>
								<label for="coolingAndHeating">Cooling &amp; Heating:</label>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" id="amenities[coolingAndHeating]" name="amenities[coolingAndHeating]" value="Central A/C">Central A/C</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" id="amenities[coolingAndHeating]" name="amenities[coolingAndHeating]" value="Air Conditioning">Air Conditioning</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" id="amenities[coolingAndHeating]" name="amenities[coolingAndHeating]" value="Ceiling fans">Ceiling fans</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Heat: forced air</label>
									</div>
								</div>
								<label for="wriring">Wiring:</label>
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
								<label for="additionalFeatures">Additional Features:</label>
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
										<label class="checkbox-inline"><input type="checkbox" value="">Granite floor</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">High/Vaulted Cealing</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" value="">Granite Countertop</label>
									</div>
								</div>
								<div id="AdditionalFeatures" title="Additional Features" class="collapse">
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Fire Place</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<a id="moreAdditionalFeatures" class="accordion-toggle" data-toggle="collapse" href="#AdditionalFeatures">+ Show More Additional Features</a>
								</div>
								<h3>Community Features</h3>
								<label for="buildingType">Building Type:</label>
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
								<label for="petpolicy">Security &amp; Access:</label>
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
								<div id="SnR" title="Security &amp; Access" class="collapse">
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Disability Access</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<a id="moreSnR" class="accordion-toggle" data-toggle="collapse" href="#SnR">+ Show More Security &amp; Access</a>
								</div>
								<label for="petpolicy">Facilities &amp; Recreation:</label>
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
								<div id="FnR" title="Facilities &amp; Recreation" class="collapse">
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
											<label class="checkbox-inline"><input type="checkbox" value="">Spa &amp; Saloon</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" value="">Barbecue</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<a id="moreFnR" class="accordion-toggle" data-toggle="collapse" href="#FnR">+ Show More Facilities &amp; Recreation</a>
								</div>
								<label for="communalParking">Communal Parking:</label>
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
										  <li><a data-toggle="tab" href="#photosMedia">Previous</a></li>
										  <li><a data-toggle="tab" href="#preview">Next</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div id="preview" class="tab-pane fade">
							    <div class="form-group">
							    	<div class="col-sm-6">
							    		<label for="showPhotos">Photos</label>
							    	</div>
							    	<div class="col-sm-6">
							    		<div>Map</div>
							    	</div>
							    </div>
							    <h4>Lease Details</h4>
							    <div class="form-group">
							    	<div class="col-sm-4">
							    		<label for="showRentAmount">Rent</label>
							    		<p data-preview="rentAmount" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    	<div class="col-sm-4">
							    		<label for="showDepositAmount">Deposit</label>
							    		<p data-preview="depositAmount" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    	<div class="col-sm-4">
							    		<label for="showLeaseDuration">Lease Duration</label>
							    		<p data-preview="leaseDuration" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    </div>
							    <div class="form-group">
							    	<div class="col-sm-4">
							    		<label for="showDateAvailable">Date Available</label>
							    		<p data-preview="dateAvailable" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    </div>
							    <div class="form-group">
							    	<div class="col-sm-12">
							    		<label for="showLeaseDetails">Lease Terms</label>
							    		<p data-preview="leaseDetails" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    </div>
							    <h4>Property Details</h4>
							    <div class="form-group">
							    	<div class="col-sm-4">
							    		<label for="showPropertyType">Property Type</label>
							    		<p data-preview="propertyType" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    	<div class="col-sm-4">
							    		<label for="showBedrooms">Bedrooms</label>
							    		<p data-preview="bedrooms" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    	<div class="col-sm-4">
							    		<label for="showBathrooms">Bathrooms</label>
							    		<p data-preview="bathrooms" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    </div>
							    <div class="form-group">
							    	<div class="col-sm-4">
							    		<label for="showSquareFeet">Square Feet</label>
							    		<p data-preview="squareFeet" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    	<div class="col-sm-4">
							    		<label for="showUnitFloor">Unit Floor</label>
							    		<p data-preview="unitFloor" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    	<div class="col-sm-4">
							    		<label for="showYearBuilt">Year Built</label>
							    		<p data-preview="yearBuilt" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    </div>
							    <div class="form-group">
							    	<div class="col-sm-4">
							    		<label for="showFurnished">Furnished</label>
							    		<p data-preview="furnished" class="form-control-static"></p>
							    	</div>
							    	<div class="col-sm-4">
							    		<label for="showPetPolicy">Pet Policy</label>
							    		<p data-preview="petPolicy" class="form-control-static"></p>
							    	</div>
							    	<div class="col-sm-4">
							    		<label for="showParkingSpaces">Parking Spaces</label>
							    		<p data-preview="parkingSpaces" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    </div>
							    <div class="form-group">
							    	<div class="col-sm-4">
							    		<label for="showParkingType">Parking Type</label>
							    		<p data-preview="parkingType" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    </div>
							    <h4>Property Description</h4>
							    <div class="form-group">
							    	<div class="col-sm-12">
							    		<label for="showPropertyTitle">Property Title</label>
							    		<p data-preview="propertyTitle" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    </div>
							    <div class="form-group">
							    	<div class="col-sm-12">
							    		<label for="showPropertyDescription">Property Description</label>
							    		<p data-preview="propertyDescription" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    </div>
							    <div class="form-group">
							    	<div class="col-sm-12">
							    		<label for="showPropertyWebsiteUrl">Property Website URL</label>
							    		<p data-preview="propertyWebsiteUrl" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    </div>
							    <h4>Amenities</h4>
							    <div class="form-group">
										8
							    	<div class="col-sm-4">
							    		g
							    	</div>
							    	<div class="col-sm-4">
							    		g
							    	</div>
							    </div>
							    <h4>Contact Information</h4>
							    <div class="form-group">
							    	<div class="col-sm-4">
							    		<label for="showContactName">Contact Name</label>
							    		<p data-preview="contactName" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    	<div class="col-sm-4">
							    		<label for="showCompanyName">Company</label>
							    		<p data-preview="companyName" data-pattern="%s" class="form-control-static"></p>
							    	</div> 
							    </div>
							    <div class="form-group">
							    	<div class="col-sm-4">
							    		<label for="showPhone">Phone</label>
							    		<p data-preview="phone" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    	<div class="col-sm-4">
							    		<label for="showEmail">Email Address</label>
							    		<p data-preview="email" data-pattern="%s" class="form-control-static"></p>
							    	</div> 
							    </div>
								<div class="col-sm-12">
									<ul class="pager">
									  <li><a data-toggle="tab" href="#description">Previous</a></li>
									  <li><a>Submit</a></li>
									</ul>
								</div>
							</div>
							<div id="listingStatus" class="tab-pane fade">
							    <h3>Listing Status</h3>
							    <p>Some content in menu 2.</p>
							</div>
						</div>
					</form>	
				</div>
					<div class='col-sm-2'></div>
			</div>
	  	<?php footerCode(); ?>           
	</div>
	<?php loginModalCode(); ?>
	<?php registerModalCode(); ?>
	<script>
	  	window.onload = function() {
	        <?php  
	                echo 'getplaces(1269750,\'province\');'."\n";
	        ?>
	    };
  	</script>
	<script id="template-upload" type="text/x-tmpl">
		{% for (var i=0, file; file=o.files[i]; i++) { %}
			<div class="template-upload fade">
				<div class="col-sm-9 well well-sm">
        			<div class='col-sm-1'>
            			<span class="preview"></span>
        			</div>
					<div class='col-sm-10'>
						<input type="text" class="form-control" id="photoCaption" placeholder="Photo Caption">
						<strong class="error text-danger"></strong>
        			</div>
        			<div class='col-sm-1'>
            			{% if (!i) { %}
                			<button class="btn btn-warning cancel">
                    			<i class="glyphicon glyphicon-trash"></i>
                			</button>
            			{% } %}
        			</div>
				</div>
			</div>
			{% } %}
	</script>

	<script id="template-download" type="text/x-tmpl">
		{% for (var i=0, file; file=o.files[i]; i++) { %}
    		<tr class="template-download fade">
        		<td>
            		<span class="preview">
                		{% if (file.thumbnailUrl) { %}
                    		<a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                		{% } %}
            		</span>
        		</td>
        		<td>
            		<p class="name">
                		{% if (file.url) { %}
                    		<a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                		{% } else { %}
                    		<span>{%=file.name%}</span>
                		{% } %}
            		</p>
            		{% if (file.error) { %}
                		<div><span class="label label-danger">Error</span> {%=file.error%}</div>
            		{% } %}
        		</td>
        		<td>
            		<span class="size">{%=o.formatFileSize(file.size)%}</span>
        		</td>
        		<td>
            		{% if (file.deleteUrl) { %}
                		<button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    		<i class="glyphicon glyphicon-trash"></i>
                    		<span>Delete</span>
                		</button>
                		<input type="checkbox" name="delete" value="1" class="toggle">
            		{% } else { %}
                		<button class="btn btn-warning cancel">
                    		<i class="glyphicon glyphicon-ban-circle"></i>
                    		<span>Cancel</span>
                		</button>
            		{% } %}
        		</td>
    		</tr>
		{% } %}
	</script>
	<script src="../vendor/jquery/js/jquery.min.js"></script>  
  	<script src="../vendor/jquery/js/jquery.ui.widget.js"></script>
  	<script src="../vendor/blueimp/js/tmpl.min.js"></script>
  	<script src="../vendor/blueimp/js/load-image.all.min.js"></script>
  	<script src="../vendor/blueimp/js/canvas-to-blob.min.js"></script>
  	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/bootstrapValidator/js/bootstrapValidator.min.js"></script>
    <script src="../vendor/moment/js/moment.min.js"></script>
    <script src="../vendor/bootstrapValidator/js/bootstrap-datetimepicker.min.js"></script>
 	<script src="../vendor/blueimp/js/jquery.blueimp-gallery.min.js"></script>
 	<script src="../vendor/jquery/js/jquery.iframe-transport.js"></script>
    <script src="../vendor/jquery/js/jquery.fileupload.js"></script>
    <script src="../vendor/jquery/js/jquery.fileupload-process.js"></script>
    <script src="../vendor/jquery/js/jquery.fileupload-image.js"></script>
    <script src="../vendor/jquery/js/jquery.fileupload-audio.js"></script>
    <script src="../vendor/jquery/js/jquery.fileupload-video.js"></script>
    <script src="../vendor/jquery/js/jquery.fileupload-validate.js"></script>
    <script src="../vendor/jquery/js/jquery.fileupload-ui.js"></script>
    <script src="../vendor/jquery/js/main.js"></script>  
    <script src="../vendor/geonames/js/jsr_class.js"></script>
    <script src="../vendor/formPreview/js/form-preview.min.js"></script>
    
    <!-- local use -->
    <script src="../js/geonames.js"></script>
    <script type="text/javascript" src="../js/header.js"></script>
    <script src="../js/loginValidation.js"></script>
    <script src="../js/registerValidation.js"></script>
    <script type="text/javascript" src="../js/rentalProperty.js"></script>
  	
</body>
</html>