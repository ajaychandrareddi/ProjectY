$(document).ready(function() {
	$('#mainLandingSearchForm').bootstrapValidator({
		exclude: [':disabled'],
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
            	validators: {
                    notEmpty: {
                        message: 'The division is required and can\'t be empty'
                    }
                }
            },
            city: {
                validators: {
                    notEmpty: {
                        message: 'The city is required and can\'t be empty'
                    }
                }
            }
        }
    });
});