$(document).ready(function(){
	
	document.getElementById('links').onclick = function (event) {
	    event = event || window.event;
	    var target = event.target || event.srcElement,
	        link = target.src ? target.parentNode : target,
	        options = {index: link, event: event},
	        links = this.getElementsByTagName('a');
	    blueimp.Gallery(links, options);
	};
	
	blueimp.Gallery(
		    document.getElementById('links').getElementsByTagName('a'),
		    {
		        container: '#blueimp-gallery-carousel',
		        carousel: true
		    }
		);
	
	$("#preview").preview({
        form : '#rentalPropertyForm',
        fields : 'input,select, textarea',
        event  : 'change',
        init   : function (preview) {
        	preview.fields.each(function(){
        		var $thisName = $(this).context.name;
        		var $thisType = $(this).context.type;

        		
        		if ($thisType === 'checkbox'){
        			preview.addProcessor($thisName, function (name, value, input) {
        				var checkedValues = $("[name='"+$thisName+"']:checked");
        				 if (checkedValues.length === 0){
        					 return '--';
        				 } else {
        					 result = '';
        					 checkedValues.each(function(){ 
        						 result += $('label[for="'+$(this).attr('id')+'"]').text() + '<br/>'; 
        					 })
        					 return result;
        				 }
        			})
        	    };
        	    
        	    if ($thisType === 'text' || $thisType === 'textarea' || $thisType === 'select-one'){
	        		preview.addProcessor($thisName, function (name, value, input) {
	        			if (value === '' || value === '-1' || value === 'on') {
	        				return '--';
	        			}
	        		})
        	    };
        	})
        }
    });
	
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
	
	$(".collapse").on("hide.bs.collapse", function (e) {
		var options = e.target.attributes.title.value;
		var name = e.target.attributes.id.value;
		$('#more' +name).html('+ Show More ' +options);
	});
	
	$('.collapse').on('show.bs.collapse', function (e) {
		var options = e.target.attributes.title.value;
		var name = e.target.attributes.id.value;
		$('#more' +name).html('- Hide ' +options);
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
	    	'fields[streetAddress]': {
	    			validators: {
	    				notEmpty: {
	    					message: 'Street address is required and cannot be empty'
	    					  }
	    				 }
	    			},
			'fields[province]': {
	            validators: {
	            	notEmpty: {
	                    message: 'The state is required and can\'t be empty'
	            			}
	            		}
	                },
            'fields[region]': {
	            validators: {
	            	notEmpty: {
	                    message: 'The division is required and can\'t be empty'
	            			}
	            		}
	                },
            'fields[city]': {
	            validators: {
	            	notEmpty: {
	                    message: 'The city is required and can\'t be empty'
	            			}
	            		}
	                },
            'fields[forRentBy]': {
	            validators: {
	            	notEmpty: {
	                    message: 'For rent by is required and can\'t be empty'
	            			}
	            		}
	                },
            'fields[phoneNumber]': {
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
            'fields[rentAmount]': {
            	validators: {
	            	notEmpty: {
	                    message: 'The rent amount is required and can\'t be empty'
	            		},
            		integer: {
        			    message: 'The rent amount should be a numeric value'	
                		}
            		}
                },
            'fields[depositAmount]': {
            	validators: {
            		integer: {
        			    message: 'The deposit amount should be a numeric value'	
            			}
            		}
            	},
        	'fields[dateAvailable]': {
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
    		'fields[propertyType]': {
	            validators: {
	            	notEmpty: {
	                    message: 'The property type is required and can\'t be empty'
	            		}
	            	}
	            },
            'fields[bedrooms]': {
	            validators: {
	            	notEmpty: {
	                    message: 'The number of bedrooms is required and can\'t be empty'
	            		}
	            	}
	            },
            'fields[bathrooms]': {
	            validators: {
	            	notEmpty: {
	                    message: 'The number of bathrooms is required and can\'t be empty'
	            		}
	            	}
	            },
            'fields[squareFeet]': {
            	validators: {
                	integer: {
        			    message: 'The square feet should be a numberic value'	
                		}
            		}
                },
            'fields[unitFloor]': {
            	validators: {
                	integer: {
        			    message: 'The unit floor should be a numberic value'	
                		}
            		}
                },
            'fields[yearBuilt]': {
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
    		'fields[propertyTitle]': {
    			validators: {
	            	notEmpty: {
	                    message: 'The property title is required and can\'t be empty'
	            		}
	            	}
    			},
			'fields[propertyWebsiteUrl]': {
				validators: {
                    uri: {
                        allowLocal: true,
                        message: 'The input is not a valid URL'
                    	}
                	}
				}
            }
		});
});