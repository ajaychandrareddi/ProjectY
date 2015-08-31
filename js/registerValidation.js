$(document).ready(function(){
	var loginValidator = $("registerForm").bootstrapValidator({
		field: {
			username : {
				email : "Email is required",
				validators : {
					notEmpty: {
						message: Please enter e-mail address
					}
				}
			}
		}
	})
)}