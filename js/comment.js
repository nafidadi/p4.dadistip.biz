$(document).ready(function(){
	//if(!$this->user) {
		$('#comment').click( function() {
			$(this).children('a').remove();
			$(this).append("<a href='/users/login' id='popup'>Login</a>");
			$(this).append("&#09;");
			$(this).append("<a href='/users/signup'>Signup</a>");
		});
	//} else {
		
	//}

	/*$('#popup').click( function() {
		$(this).dialog({autoOpen: false});
		$(this).dialog();
	});*/
});
