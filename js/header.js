
// Select all elements with data-toggle="popover" in the document
$(document).ready(function(){
	$('#buyDataToggle').popover({
	    html: true, 
		content: function() {
	          return $('#buyPopoverContent').html();
	        }
	});
	
	$('#sellDataToggle').popover({
	    html: true, 
		content: function() {
	          return $('#sellPopoverContent').html();
	        }
	});
	
	$('#rentDataToggle').popover({
	    html: true, 
		content: function() {
	          return $('#rentPopoverContent').html();
	        }
	});
	
	$('#loansDataToggle').popover({
	    html: true, 
		content: function() {
	          return $('#loansPopoverContent').html();
	        }
	});
	
	$('#agentDataToggle').popover({
	    html: true, 
		content: function() {
	          return $('#agentPopoverContent').html();
	        }
	});
	
	$('#newsDataToggle').popover({
	    html: true, 
		content: function() {
	          return $('#newsPopoverContent').html();
	        }
	});
	
    $("#loginLink").click(function(){
        $("#loginModal").modal();
    });
    
    $("#registerLink").click(function(){
        $("#registerModal").modal();
    });
});
