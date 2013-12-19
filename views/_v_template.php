<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<link rel="stylesheet" href="/css/main.css" type="text/css">
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
					
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

	<script src="js/comment.js"></script>
					
</head>

<body>	
	<nav id='menu'>
		<?php if($user): ?>
			<ul>
				<li><a href='/'>Home</a></li>
            			<li><a href='/posts'>Profile</a></li>
				<li><a href='/search'>Hotels</a></li>
				<li><a href='/users/logout'>Logout</a></li>
			</ul>
			<!-- Menu options for users who are not logged in -->
        		<?php else: ?>
			<ul>
				<li><a href='/'>Home</a></li>
				<li><a href='/search'>Hotels</a></li>
            			<li><a href='/users/signup'>Sign up</a></li>
            			<li><a href='/users/login'>Log in</a></li>
			</ul>
        	<?php endif; ?>
	</nav>

	<div id='main_page'>
		<?php if(isset($contentTop)) echo $contentTop; ?>
		<?php if(isset($contentBottom)) echo $contentBottom; ?>
		<?php if(isset($content)) echo $content; ?>

		<?php if(isset($client_files_body)) echo $client_files_body; ?>
	</div>
</body>
</html>
