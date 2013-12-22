$(document).ready( function() {
	$('.submit').click( function() {
		$('#signin').validate( {
			debug: true
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
	});
	
	$('#login_nav').click( function() {
		$("input[name='email']").focus();
	}
}
