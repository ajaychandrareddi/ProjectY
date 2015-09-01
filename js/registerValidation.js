$(document).ready(function(){
	$('#registerForm').formValidation({
        framework: 'bootstrap',
        excluded: ':disabled',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
		fields: {
			email : {
				message : "Email address is required",
				validators : {
					notEmpty: {
						message: "Please enter e-mail address"
					}
				}
			}
		}
	});
)};