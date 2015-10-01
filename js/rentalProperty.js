$(document).ready(function(){
	$("#collapseRooms").on("hide.bs.collapse", function(){
		$("#moreRooms").html('+ Show All Rooms');
	});
	$("#collapseRooms").on("show.bs.collapse", function(){
		$("#moreRooms").html('- Hide All Rooms');
	});
	
	$("#collapseExteriors").on("hide.bs.collapse", function(){
		$("#moreExterirors").html('+ Show All Exteriors');
	});
	$("#collapseExteriors").on("show.bs.collapse", function(){
		$("#moreExterirors").html('- Hide All Exteriors');
	});
	
	$("#collapseAppliances").on("hide.bs.collapse", function(){
		$("#moreAppliances").html('+ Show All Appliances');
	});
	$("#collapseAppliances").on("show.bs.collapse", function(){
		$("#moreAppliances").html('- Hide All Appliances');
	});
	
	$("#collapseSnR").on("hide.bs.collapse", function(){
		$("#moreSnR").html('+ Show All Security & Access');
	});
	$("#collapseSnR").on("show.bs.collapse", function(){
		$("#moreSnR").html('- Hide All Security & Access');
	});
	
	$("#collapseFnR").on("hide.bs.collapse", function(){
		$("#moreFnR").html('+ Show All Facilities & Recreation');
	});
	$("#collapseFnR").on("show.bs.collapse", function(){
		$("#moreFnR").html('- Hide All Facilities & Recreation');
	});

});