$(document).ready(function() {
	$('#mainLandingSearchForm').bootstrapValidator({
		feedbackIcons: {
	        valid: 'glyphicon glyphicon-ok',
	        invalid: 'glyphicon glyphicon-remove',
	        validating: 'glyphicon glyphicon-refresh'
	    },
	    fields: {
	    	province: {
                validators: {
                    notEmpty: {
                        message: 'The state is required and can\'t be empty'
                    }
                }
            },
            region: {
            	enabled: false,
            	validators: {
                    notEmpty: {
                        message: 'The division is required and can\'t be empty'
                    }
                }
            },
            city: {
            	enabled: false,
                validators: {
                    notEmpty: {
                        message: 'The city is required and can\'t be empty'
                    }
                }
            }
        }
    });
});