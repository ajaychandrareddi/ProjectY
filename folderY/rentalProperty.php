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
  <link rel="stylesheet" href="../vendor/jquery/css/jquery.fileupload.css">
  <link rel="stylesheet" href="../vendor/jquery/css/jquery.fileupload-ui.css">
  <link rel="stylesheet" href="../vendor/blueimp/css/blueimp-gallery.min.css">
  <link rel="stylesheet" href="../vendor/blueimp/css/blueimp-gallery-indicator.css">
  
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
						  	<li class="active"><a data-toggle="tab" href="#location">Location </i></a></li>
						  	<li><a data-toggle="tab" href="#contactInfo">Contact Info </a></li>
						  	<li><a data-toggle="tab" href="#basicDetails">Basic Details </a></li>
						  	<li><a data-toggle="tab" href="#photosMedia">Photos &amp; Media </a></li>
						  	<li><a data-toggle="tab" href="#description">Description </a></li>
						  	<li><a data-toggle="tab" href="#preview">Review</a></li>
						  	<li><a data-toggle="tab" href="#listingStatus">Listing Status</a></li>
						</ul>
					<form id="rentalPropertyForm" name="rentalPropertyForm" class="form-horizontal" role="form" method="post" action="#listingStatus">
						<div class="tab-content">
							<div id="location" class="tab-pane fade in active">
								<h3>Location</h3>
								<div class="form-group">
									<div class="col-sm-7">
										<label for="streetAddress">Street Address:</label>
										<input type="text" class="form-control" name="fields[streetAddress]">
									</div>
									<div class="col-sm-2">
										<label for="unit">Unit:</label>
										<input type="text" class="form-control" name="fields[unit]">
									</div>
								</div>
							    <div class="form-group form-inline">
							    	<div class="col-sm-9">
										<select class="form-control input-sm" id="province" name="fields[province]" onchange="getplaces(this.value,'region');">
											<option value="<?=$_POST['province']?>"> </option>
									    </select>
										<select class="form-control input-sm" id="region" name="fields[region]" onchange="getplaces(this.value,'city');">
											<option value="<?=$_POST['region']?>">-- Select Division --</option>
									    </select>
										<select class="form-control input-sm" id="city" name="fields[city]">
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
										  <label for="forRentBy[1]"><input type="radio" id="forRentBy[1]" name="fields[forRentBy]" value="1">Management Company/Broker</label>
										</div>
										<div class="radio">
										  <label for="forRentBy[2]"><input type="radio" id="forRentBy[2]" name="fields[forRentBy]" value="2">Owner</label>
										</div>
										<div class="radio">
										  <label for="forRentBy[3]"><input type="radio" id="forRentBy[3]" name="fieldsforRentBy]" value="3">Tenant</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9">
										<label for="contactName">Contact Name:</label>
										<input type="text" class="form-control" name="fields[contactName]">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9">
										<label for="companyName">Company Name:</label>
										<input type="text" class="form-control" name="fields[companyName]">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9">
										<label for="email">Email:</label>
										<input type="text" class="form-control" name="fields[email]">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9">
										<label for="phone">Phone:</label>
										<input type="text" class="form-control" name="fields[phone]">
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
											<input type="text" class="form-control" name="fields[rentAmount]">
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
											<input type="text" class="form-control" name="fields[depositAmount]">
											<span class="input-group-addon">
								                    <span>.00</span>
								            </span>
							            </div>
									</div>
									<div class="col-sm-5">
								      <label for="leaseDuration">Lease Duration:</label>
									  <select class="form-control" name="fields[leaseDuration]">
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
											<input type="text" class="form-control" name="fields[dateAvailable]">
											<span class="input-group-addon">
							                    <span class="glyphicon glyphicon-calendar"></span>
							                </span>
							            </div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
									    <label for="leaseDetails">Additional Lease Details:</label>
									    <textarea class="form-control" rows="5" name="fields[leaseDetails]"></textarea>
							      	</div>
							    </div>
							    <h3>Rental Details</h3>
							    <div class="form-group">
									<div class="col-sm-5">
								      <label for="propertyType">Property Type:</label>
									  <select class="form-control" name="fields[propertyType]">
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
										  <label for="roomForRent"><input type="checkbox" name="fields[roomForRent]">Room for Rent</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-5">
								      <label for="bedrooms">Bed Rooms:</label>
									  <select class="form-control" name="fields[bedrooms]">
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
									  <select class="form-control" name="fields[bathrooms]">
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
										<input type="text" class="form-control" name="fields[squareFeet]">
									</div>
									<div class="col-sm-5">
										<label for="unitFloor">Unit Floor:</label>
										<input type="text" class="form-control" name="fields[unitFloor]">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-5">
										<label for="yearBuilt">Year Built:</label>
										<div class="input-group date" id="yearBuiltPicker">
											<input type="text" class="form-control" name="fields[yearBuilt]">
											<span class="input-group-addon">
							                    <span class="glyphicon glyphicon-calendar"></span>
							                </span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-5">
										<div class="checkbox">
										  <label for="furnished"><input type="checkbox" id="furnished" name="fields[furnished]" value="Furnished">Furnished</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-5">
								      <label for="parkingSpaces">Parking Spaces:</label>
									  <select class="form-control" name="fields[parkingSpaces]">
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
									  <select class="form-control" name="fields[parkingType]">
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
										<label class="checkbox-inline" for="petPolicy[1]"><input type="checkbox" id="petPolicy[1]" name="fields[petPolicy]">No Pets Allowed</label>
										<label class="checkbox-inline" for="petPolicy[2]"><input type="checkbox" id="petPolicy[2]" name="fields[petPolicy]">Dogs OK</label>
										<label class="checkbox-inline" for="petPolicy[3]"><input type="checkbox" id="petPolicy[3]" name="fields[petPolicy]">Cats OK</label>
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
										<input type="text" class="form-control" name="fields[propertyTitle]">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9">
									    <label for="propertyDescription">Property Description:</label>
									    <textarea class="form-control" rows="5" name="fields[propertyDescription]"></textarea>
							      	</div>
							    </div>
							    <div class="form-group">
									<div class="col-sm-9">
										<label for="propertyWebsiteUrl">Property Website URL:</label>
										<input type="text" class="form-control" name="fields[propertyWebsiteUrl]">
									</div>
								</div>
								<h3>Unit Features</h3>
								<label for="rooms">Rooms:</label>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline" for="rooms[1]"><input type="checkbox" id="rooms[1]" name="fields[amenities][]">Living Room</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline" for="rooms[2]"><input type="checkbox" id="rooms[2]" name="fields[amenities][]">Dining Room</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline" for="rooms[3]"><input type="checkbox" id="rooms[3]" name="fields[amenities][]">Family Room or Den</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline" for="rooms[4]"><input type="checkbox" id="rooms[4]" name="fields[amenities][]">Waiting or Front Room</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline" for="rooms[5]"><input type="checkbox" id="rooms[5]" name="fields[amenities][]">Mult-Purpose Hall</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline" for="rooms[6]"><input type="checkbox" id="rooms[6]" name="fields[amenities][]">Pooja Room</label>
									</div>
								</div>
								<div id="Rooms" title="Rooms" class="collapse">
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline" for="rooms[7]"><input type="checkbox" id="rooms[7]" name="fields[amenities][]">Dress Room</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline" for="rooms[8]"><input type="checkbox" id="rooms[8]" name="fields[amenities][]">Laundary Room</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline" for="rooms[9]"><input type="checkbox" id="rooms[9]" name="fields[amenities][]">Utility Room</label>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline" for="rooms[10]"><input type="checkbox" id="rooms[10]" name="fields[amenities][]">Kitchen</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline" for="rooms[11]"><input type="checkbox" id="rooms[11]" name="fields[amenities][]">Office or Study Room</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline" for="rooms[12]"><input type="checkbox" id="rooms[12]" name="fields[amenities][]">Sun Room or Sit Out</label>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline" for="rooms[13]"><input type="checkbox" id="rooms[13]" name="fields[amenities][]">Walk-in Closet</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline" for="rooms[14]"><input type="checkbox" id="rooms[14]" name="fields[amenities][]">Pantry</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline" for="rooms[15]"><input type="checkbox" id="rooms[15]" name="fields[amenities][]">Foyer</label>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline" for="rooms[16]"><input type="checkbox" id="rooms[16]" name="fields[amenities][]">Lounge</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline" for="rooms[17]"><input type="checkbox" id="rooms[17]" name="fields[amenities][]">Solarium or Atrium</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline" for="rooms[18]"><input type="checkbox" id="rooms[18]" name="fields[amenities][]">Basement</label>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline" for="rooms[19]"><input type="checkbox" id="rooms[19]" name="fields[amenities][]">Bar</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline" for="rooms[20]"><input type="checkbox" id="rooms[20]" name="fields[amenities][]">Store Room</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline" for="rooms[21]"><input type="checkbox" id="rooms[21]" name="fields[amenities][]">Maid &#39;s Room</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<a id="moreRooms" class="accordion-toggle" data-toggle="collapse" href="#Rooms">+ Show More Rooms</a>
								</div>
								<label for="exterior">Exterior:</label>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Private Pool</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Verandah</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Balcony, Deck or Patio</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Open Terrace</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Yard</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Lawn</label>
									</div>
								</div>
								<div id="Exteriors" title="Exteriors" class="collapse">
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Pond</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Lake</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Porch</label>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Garden</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Sprinkler System</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Greenhouse</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<a id="moreExteriors" class="accordion-toggle" data-toggle="collapse" href="#Exteriors">+ Show More Exteriors</a>
								</div>
								<label for="appliances">Appliances:</label>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Range or Oven</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Refrigerator</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Dishwasher</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Microwave</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Garbage disposal</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Stainless Steel Appliances</label>
									</div>
								</div>
								<div id="Appliances" title="Appliances" class="collapse">
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Freezer</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Trash compactor</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<a id="moreAppliances" class="accordion-toggle" data-toggle="collapse" href="#Appliances">+ Show More Appliances</a>
								</div>
								<label for="coolingAndHeating">Cooling &amp; Heating:</label>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Central A/C</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Air Conditioning</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Ceiling fans</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Heat: forced air</label>
									</div>
								</div>
								<label for="wriring">Wiring:</label>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Cable-ready</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">High-speed Internet</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Wired</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Intercom system</label>
									</div>
								</div>
								<label for="additionalFeatures">Additional Features:</label>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Tile floor</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Marble floor</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Hardwood floor</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Granite floor</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">High/Vaulted Cealing</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Granite Countertop</label>
									</div>
								</div>
								<div id="AdditionalFeatures" title="Additional Features" class="collapse">
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Fire Place</label>
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
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">New Property</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Waterfront</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Vintage Building</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Loft Layout</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Assisted Living</label>
									</div>
								</div>
								<label for="petpolicy">Security &amp; Access:</label>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Elevator</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Secured Entry</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Controlled Access</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Gated Entry</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Security System</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Doorman</label>
									</div>
								</div>
								<div id="SnR" title="Security &amp; Access" class="collapse">
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Disability Access</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<a id="moreSnR" class="accordion-toggle" data-toggle="collapse" href="#SnR">+ Show More Security &amp; Access</a>
								</div>
								<label for="petpolicy">Facilities &amp; Recreation:</label>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Shared Pool</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Fitness Center</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Clubhouse</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Squash Court</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Table Tennis</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Indoor Badminton</label>
									</div>
								</div>
								<div id="FnR" title="Facilities &amp; Recreation" class="collapse">
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Children Play Area</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Tennis Court</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Golf Course</label>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Library</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Business Center</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Billiards Room</label>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Near Transportation</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Spa &amp; Saloon</label>
										</div>
										<div class="col-sm-4">
											<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Barbecue</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<a id="moreFnR" class="accordion-toggle" data-toggle="collapse" href="#FnR">+ Show More Facilities &amp; Recreation</a>
								</div>
								<label for="communalParking">Communal Parking:</label>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Guest Parking</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Off-Street Parking</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Covered Parking</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">On-Street Parking</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Garage - Attached</label>
									</div>
									<div class="col-sm-4">
										<label class="checkbox-inline"><input type="checkbox" name="fields[amenities][]">Garage - Detached</label>
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
							    		<div id="links" class="links">
										    <a href="../images/home.jpg" title="Banana">
										        <img src="../images/home.jpg" alt="Banana">
										    </a>
										    <a href="../images/home.jpg" title="Apple">
										        <img src="../images/home.jpg" alt="Apple">
										    </a>
										    <a href="../images/home.jpg" title="Orange">
										        <img src="../images/home.jpg" alt="Orange">
										    </a>
										</div>
										<div id="blueimp-gallery" class="blueimp-gallery">
										    <div class="slides"></div>
										    <h3 class="title"></h3>
										    <a class="prev">�</a>
										    <a class="next">�</a>
										    <a class="close">�</a>
										    <a class="play-pause"></a>
										    <ol class="indicator"></ol>
										</div>
										<div id="blueimp-gallery-carousel" class="blueimp-gallery blueimp-gallery-controls blueimp-gallery-carousel">
										    <div class="slides"></div>
										    <h3 class="title"></h3>
										    <a class="prev">�</a>
										    <a class="next">�</a>
										    <a class="play-pause"></a>
										    <ol class="indicator"></ol>
										</div>
							    	</div>
							    	<div class="col-sm-6">
							    		<div>Map</div>
							    	</div>
							    </div>
							    <h4>Lease Details</h4>
							    <div class="form-group">
							    	<div class="col-sm-4">
							    		<label for="showRentAmount">Rent</label>
							    		<p data-preview="fields[rentAmount]" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    	<div class="col-sm-4">
							    		<label for="showDepositAmount">Deposit</label>
							    		<p data-preview="fields[depositAmount]" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    	<div class="col-sm-4">
							    		<label for="showLeaseDuration">Lease Duration</label>
							    		<p data-preview="fields[leaseDuration]" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    </div>
							    <div class="form-group">
							    	<div class="col-sm-4">
							    		<label for="showDateAvailable">Date Available</label>
							    		<p data-preview="fields[dateAvailable]" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    </div>
							    <div class="form-group">
							    	<div class="col-sm-12">
							    		<label for="showLeaseDetails">Lease Terms</label>
							    		<p data-preview="fields[leaseDetails]" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    </div>
							    <h4>Property Details</h4>
							    <div class="form-group">
							    	<div class="col-sm-4">
							    		<label for="showPropertyType">Property Type</label>
							    		<p data-preview="fields[propertyType]" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    	<div class="col-sm-4">
							    		<label for="showBedrooms">Bedrooms</label>
							    		<p data-preview="fields[bedrooms]" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    	<div class="col-sm-4">
							    		<label for="showBathrooms">Bathrooms</label>
							    		<p data-preview="fields[bathrooms]" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    </div>
							    <div class="form-group">
							    	<div class="col-sm-4">
							    		<label for="showSquareFeet">Square Feet</label>
							    		<p data-preview="fields[squareFeet]" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    	<div class="col-sm-4">
							    		<label for="showUnitFloor">Unit Floor</label>
							    		<p data-preview="fields[unitFloor]" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    	<div class="col-sm-4">
							    		<label for="showYearBuilt">Year Built</label>
							    		<p data-preview="fields[yearBuilt]" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    </div>
							    <div class="form-group">
							    	<div class="col-sm-4">
							    		<label for="showFurnished">Furnished</label>
							    		<p data-preview="fields[furnished]" class="form-control-static"></p>
							    	</div>
							    	<div class="col-sm-4">
							    		<label for="showPetPolicy">Pet Policy</label>
							    		<p data-preview="fields[petPolicy]" class="form-control-static"></p>
							    	</div>
							    	<div class="col-sm-4">
							    		<label for="showParkingSpaces">Parking Spaces</label>
							    		<p data-preview="fields[parkingSpaces]" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    </div>
							    <div class="form-group">
							    	<div class="col-sm-4">
							    		<label for="showParkingType">Parking Type</label>
							    		<p data-preview="fields[parkingType]" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    </div>
							    <h4>Property Description</h4>
							    <div class="form-group">
							    	<div class="col-sm-12">
							    		<label for="showPropertyTitle">Property Title</label>
							    		<p data-preview="fields[propertyTitle]" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    </div>
							    <div class="form-group">
							    	<div class="col-sm-12">
							    		<label for="showPropertyDescription">Property Description</label>
							    		<p data-preview="fields[propertyDescription]" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    </div>
							    <div class="form-group">
							    	<div class="col-sm-12">
							    		<label for="showPropertyWebsiteUrl">Property Website URL</label>
							    		<p data-preview="fields[propertyWebsiteUrl]" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    </div>
							    <h4>Amenities</h4>
							    <div class="form-group">					
							    	<div class="col-sm-4">
							    		<label for="amenities"></label>
							    		<p data-preview="fields[amenities][]" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    </div>
							    <h4>Contact Information</h4>
							    <div class="form-group">
							    	<div class="col-sm-4">
							    		<label for="showContactName">Contact Name</label>
							    		<p data-preview="fields[contactName]" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    	<div class="col-sm-4">
							    		<label for="showCompanyName">Company</label>
							    		<p data-preview="fields[companyName]" data-pattern="%s" class="form-control-static"></p>
							    	</div> 
							    </div>
							    <div class="form-group">
							    	<div class="col-sm-4">
							    		<label for="showPhone">Phone</label>
							    		<p data-preview="fields[phone]" data-pattern="%s" class="form-control-static"></p>
							    	</div>
							    	<div class="col-sm-4">
							    		<label for="showEmail">Email Address</label>
							    		<p data-preview="fields[email]" data-pattern="%s" class="form-control-static"></p>
							    	</div> 
							    </div>
								<div class="col-sm-12">
									<ul class="pager">
									  <li><a data-toggle="tab" href="#description">Previous</a></li>
									  <li><a>Submit</a></li>
									</ul>
								</div>
							</div>
						</form>	
							<div id="listingStatus" class="tab-pane fade">
							    <h3>Listing Status</h3>
							    <pre><?php print_r($_POST); ?></pre>
							</div>
						</div>
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
 	<script src="../vendor/jquery/js/jquery.iframe-transport.js"></script>
    <script src="../vendor/jquery/js/jquery.fileupload.js"></script>
    <script src="../vendor/jquery/js/jquery.fileupload-process.js"></script>
    <script src="../vendor/jquery/js/jquery.fileupload-image.js"></script>
    <script src="../vendor/jquery/js/jquery.fileupload-validate.js"></script>
    <script src="../vendor/jquery/js/jquery.fileupload-ui.js"></script>
    <script src="../vendor/jquery/js/main.js"></script>
    <script src="../vendor/geonames/js/jsr_class.js"></script>
    <script src="../vendor/formPreview/js/form-preview.min.js"></script>
    <script src="../vendor/blueimp/js/blueimp-gallery.min.js"></script>
    <script src="../vendor/blueimp/js/blueimp-gallery-indicator.js"></script>
  	<script src="../vendor/blueimp/js/jquery.blueimp-gallery.min.js"></script>
    

    
    <!-- local use -->
    <script src="../js/geonames.js"></script>
    <script type="text/javascript" src="../js/header.js"></script>
    <script src="../js/loginValidation.js"></script>
    <script src="../js/registerValidation.js"></script>
    <script type="text/javascript" src="../js/rentalProperty.js"></script>
  	
</body>
</html>