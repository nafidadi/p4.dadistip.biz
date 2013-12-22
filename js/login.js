$(document).ready( function() {
	$('#login_nav').click( function() {
		$("input[name='email']").focus();
	}

	/*$('.submit').click( function() {
		e.preventDefault();
		var urEmail = $('#signin #email').val();
		if($.trim(urEmail) == '') {
			alert('invalid');
			
		}
	});*/

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
}
