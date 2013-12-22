<section id='login'>
	<form name='signin' id='signin'  method='POST' action='/users/p_login'>
                <fieldset>
			<h3>Login:</h3>
			<label for='email'>Email:</label><br />
                        <input type='email' name='email' id='email' value='' required><br /><br />
			<div id=email_err></div>

			<label for='password'>Password:</label><br />
                        <input type='password' name='password' id='password' value='' required><br /><br />
			<div id=pwd_err></div>
                        <input type='submit' value='Log in' name='action' class='submit'>
                </fieldset>
	</form>
</section>
