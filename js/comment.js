$(document).ready( function() {
	/*$('.submit').click( function() {
		$('#signin').validate( {
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

		$('#signin').validate( {
			rules: {
				email: {
					required:true,
					email:true
				},
				password:'required'
			},
			messages: {
				email: 'Please enter a valid email address',
				password:'Please enter a password'
			},
	
			submitHandler: function(form) {
				form.submit();
			}
		});
	});*/

	/*$('.search_nav').click( function() {
		$("input[name='find']").focus();
	}

	$('#signup_nav').click( function() {
		$("input[name='first_name']").focus();
	}
	
	$('#login_nav').click( function() {
		$("input[name='email']").focus();
	}*/

	$('.comment').click( function() {
		$(this).children('a').remove();
		$(this).append("<a href='/users/login'>Login</a>");
		$(this).append("&#09;");
		$(this).append("<a href='/users/signup'>Signup</a>");
	});
});
