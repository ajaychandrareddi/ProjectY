$(document).ready(function(){
	
	$('#dateAvailablePicker').datetimepicker({
		format: 'DD/MM/YYYY h:m A',
		minDate: new Date()
	});
	
	$('#dateAvailablePicker')
    .on('dp.change dp.show', function(e) {
        $('#rentalPropertyForm')
            .data('bootstrapValidator')
            .updateStatus('dateAvailable', 'NOT_VALIDATED', null)
            .validateField('dateAvailable');
    });
	
	$('#yearBuiltPicker').datetimepicker({
		format: 'YYYY',
		maxDate: new Date()
	});
	
	$('#yearBuiltPicker')
    .on('dp.change dp.show', function(e) {
        $('#rentalPropertyForm')
            .data('bootstrapValidator')
            .updateStatus('yearBuilt', 'NOT_VALIDATED', null)
            .validateField('yearBuilt');
    });
	
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
	
	$("#collapseAdditionalFeatures").on("hide.bs.collapse", function(){
		$("#moreAdditionalFeatures").html('+ Show All Additional Features');
	});
	$("#collapseAdditionalFeatures").on("show.bs.collapse", function(){
		$("#moreAdditionalFeatures").html('- Hide All Additional Features');
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
	
	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		var target = e.target.attributes.href.value;
		$(".nav-tabs a").parent().removeClass('active');
		$(".nav-tabs a[href=" + target + "]").parent().addClass('active');
	});
	
	$('#rentalPropertyForm').bootstrapValidator({
		message: 'This value is not valid',
		excluded: [':disabled'],
		feedbackIcons: {
	        valid: 'glyphicon glyphicon-ok',
	        invalid: 'glyphicon glyphicon-remove',
	        validating: 'glyphicon glyphicon-refresh'
	    },
	    fields: {
	    	streetAddress: {
	    		message: 'Street address is not valid',
	    			validators: {
	    				notEmpty: {
	    					message: 'Street address is required and cannot be empty'
	    					  }
	    				 }
	    			},
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
	                },
            'forRentBy[]': {
	            validators: {
	            	notEmpty: {
	                    message: 'For rent by is required and can\'t be empty'
	            			}
	            		}
	                },
            phoneNumber: {
	            validators: {
	            	notEmpty: {
	                    message: 'The phone number is required and can\'t be empty'
	            		},
	                phone: {
            			message: 'This is not a valid INDIA phone number',
            			country: 'IN'
	                		}
            			}
	                },
            rentAmount: {
            	validators: {
	            	notEmpty: {
	                    message: 'The rent amount is required and can\'t be empty'
	            		},
                	numeric: {
        			    message: 'The rent amount should be a numeric value'	
                		}
            		}
                },
            depositAmount: {
            	validators: {
                	numeric: {
        			    message: 'The deposit amount should be a numeric value'	
            			}
            		}
            	},
        	dateAvailable: {
        		validators: {
        			notEmpty: {
        			    message: 'The date available is required and can\'t be empty'	
            			},
        			date: {
                        format: 'DD/MM/YYYY h:m A',
                        message: 'The date is not valid. Valid Format is DD/MM/YYYY format h:m A'
                        }
        			}
        		},
    		propertyType: {
	            validators: {
	            	notEmpty: {
	                    message: 'The property type is required and can\'t be empty'
	            		}
	            	}
	            },
	        bedrooms: {
	            validators: {
	            	notEmpty: {
	                    message: 'The number of bedrooms is required and can\'t be empty'
	            		}
	            	}
	            },
            bathrooms: {
	            validators: {
	            	notEmpty: {
	                    message: 'The number of bathrooms is required and can\'t be empty'
	            		}
	            	}
	            },
            squareFeet: {
            	validators: {
                	integer: {
        			    message: 'The square feet should be a numberic value'	
                		}
            		}
                },
            unitFloor: {
            	validators: {
                	integer: {
        			    message: 'The unit floor should be a numberic value'	
                		}
            		}
                },
            yearBuilt: {
        		validators: {
        			callback: {
                        message: 'The year is not valid',
                        callback: function(value, validator) {
                            var m = new moment(value, 'YYYY', true);
                            if (!m.isValid()) {
                                return false;
                            }
                            	return true;
                        	}
                        }
        			}
        		},
    		propertyTitle: {
    			validators: {
	            	notEmpty: {
	                    message: 'The property title is required and can\'t be empty'
	            		}
	            	}
    			},
			propertyWebsiteUrl: {
				validators: {
                    uri: {
                        allowLocal: true,
                        message: 'The input is not a valid URL'
                    	}
                	}
				}
            }
		});
	

		$("[href='#review']").click(function(){
			event.preventDefault();
			preview();
		});
		
		function preview(){
			var fields = $( ":input" ).serializeArray();
			console.log(fields);
		    $.each( fields, function( i, field ) {
		    		$('#r_' + field.name).html($('#' + field.name).val());
		    });
		}
});