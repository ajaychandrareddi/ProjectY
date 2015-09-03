$(document).ready(function() {
	
	$('#registerModal').on('show.bs.modal', function () {

         $('#registerForm')
                    .bootstrapValidator('disableSubmitButtons', false)
                    .bootstrapValidator('resetForm', true);
    });
	
	$('#registerForm').bootstrapValidator({
		message: 'This value is not valid',
		excluded: [':disabled'],
		feedbackIcons: {
	        valid: 'glyphicon glyphicon-ok',
	        invalid: 'glyphicon glyphicon-remove',
	        validating: 'glyphicon glyphicon-refresh'
	    },
	    fields: {
	    	username: {
	    		message: 'The username is not valid',
	    		validators: {
	    			notEmpty: {
	                    message: 'The username is required and cannot be empty'
	                },
	                stringLength: {
	                    min: 6,
	                    max: 30,
	                    message: 'The username must be more than 6 and less than 30 characters long'
	                },
	                regexp: {
	                    regexp: /^[a-zA-Z0-9_\.]+$/,
	                    message: 'The username can only consist of alphabetical, number, dot and underscore'
	                },
	                different: {
	                    field: 'password',
	                    message: 'The username and password cannot be the same as each other'
	                }
	    		}
	    	},
	    	email: {
	            validators: {
	            	notEmpty: {
	                    message: 'The email address is required and can\'t be empty'
	                },
	                emailAddress: {
	                    message: 'The input is not a valid email address'
	                }
	            }
	        },
	        password: {
	            validators: {
	                notEmpty: {
	                    message: 'The password is required and cannot be empty'
	                },
	                different: {
	                    field: 'username',
	                    message: 'The password cannot be the same as username'
	                }
	            }
	        }
	    }
    })
    .on('success.form.bv', function(e) {
        e.preventDefault();
        var $form     = $(e.target),
            validator = $form.data('bootstrapValidator');
        	$form
        	.bootstrapValidator('disableSubmitButtons', false)
    });
});