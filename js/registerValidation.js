$(document).ready(function() {
	
	$('#registerModal').on('show.bs.modal', function () {

         $('#registerForm')
                    .bootstrapValidator('disableSubmitButtons', false)
                    .bootstrapValidator('resetForm', true);
    });
	
	$('#registerModal').on('hide.bs.modal', function () {
		window.location.reload();
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
	                remote: {
                        type: 'POST',
                        url: '../php/bsRemote/register.php'
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
	                },
	                remote: {
                        type: 'POST',
                        url: '../php/bsRemote/register.php'
                    }
	            }
	        },
	        password: {
	            validators: {
	                notEmpty: {
	                    message: 'The password is required and cannot be empty'
	                },
	                stringLength: {
	                    min: 6,
	                    message: 'The password must be more than 6 characters long'
	                },
	                different: {
	                    field: 'username',
	                    message: 'The password cannot be the same as username'
	                }
	            }
	        }
	    }
    })
    .on('error.field.bv', function(e, data) {
                console.log(data.field, data.element, '-->error');
            })

    .on('success.form.bv', function(e) {
            e.preventDefault();
            var $form = $(e.target);
            var bv = $form.data('bootstrapValidator');
            $.post($form.attr('action'), $form.serialize(), function(result) {
            	console.log(result);
                
            }, 'json');
    });
});