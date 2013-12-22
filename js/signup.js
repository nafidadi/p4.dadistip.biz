$(document).ready( function() {
	$('.submit').click( function() {
		$('#register').validate( {
			debug: true
		});
		$('#register').validate( {
			rules: {
				first_name: 'required',
				last_name: 'required',
				timezone: 'required',
				email: {
					required:true,
					email:true
				},
				password:'required'
			},
			messages: {
				first_name: 'Please enter first name',
				last_name: 'Please enter last name',
				timezone: 'Please select your time zone',
				email: 'Please enter a valid email address',
				password:'Please enter a password'
			},
	
			submitHandler: function(form) {
				form.submit();
			}
		});
	});

	$('#signup_nav').click( function() {
		$("input[name='first_name']").focus();
	}
});
