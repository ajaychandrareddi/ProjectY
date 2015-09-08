$(document).ready(function() {
	
	$('#loginModal').on('show.bs.modal', function() {
        $('#loginForm')
                   .bootstrapValidator('disableSubmitButtons', false)
                   .bootstrapValidator('resetForm', true);
	});
	
	$('#loginForm').bootstrapValidator({
		message: 'This value is not valid',
		exclude: [':disabled'],
		feedbackIcons: {
	        valid: 'glyphicon glyphicon-ok',
	        invalid: 'glyphicon glyphicon-remove',
	        validating: 'glyphicon glyphicon-refresh'
	    },
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'The username is required'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    }
                }
            }
        }
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