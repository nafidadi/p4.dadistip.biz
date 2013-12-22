$(document).ready( function() {
	$('.comment').click( function() {
		$(this).children('a').remove();
		$(this).append("<a href='/users/login'>Login</a>");
		$(this).append("&#09;");
		$(this).append("<a href='/users/signup'>Signup</a>");
	});
});
