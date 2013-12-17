<section id='signup'>
	<form name='register' id='register' method='POST' action='/users/p_signup'>
		<fieldset>
		<h3> Sign Up for tellAtale!</h3>
    		First Name:<br />
    		<input type='text' name='first_name' value='' required><br /><br />

    		Last Name:<br />
    		<input type='text' name='last_name' value='' required><br /><br />

		Nick Name:<br />
                <input type='text' name='nick_name' value='anonymous'><br /><br />
    		
    		Select Your Time Zone:<br />
    		<select name='timezone' id='time_zone'>
			<option value="-12.0">(GMT -12:00) Eniwetok, Kwajalein</option>
			<option value="-11.0">(GMT -11:00) Midway Island, Samoa</option>
		      	<option value="-10.0">(GMT -10:00) Hawaii</option>
		      	<option value="-9.0">(GMT -9:00) Alaska</option>
		      	<option value="-8.0">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
		      	<option value="-7.0">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
		      	<option value="-6.0">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
		      	<option value="-5.0" selected>(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
		      	<option value="-4.0">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
		      	<option value="-3.5">(GMT -3:30) Newfoundland</option>
		      	<option value="-3.0">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
		      	<option value="-2.0">(GMT -2:00) Mid-Atlantic</option>
		      	<option value="-1.0">(GMT -1:00) Azores, Cape Verde Islands</option>
		      	<option value="0.0">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
		      	<option value="1.0">(GMT +1:00) Brussels, Copenhagen, Madrid, Paris</option>
		      	<option value="2.0">(GMT +2:00) Kaliningrad, South Africa</option>
		      	<option value="3.0">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
		      	<option value="3.5">(GMT +3:30) Tehran</option>
		      	<option value="4.0">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
		      	<option value="4.5">(GMT +4:30) Kabul</option>
		      	<option value="5.0">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
		      	<option value="5.5">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
		      	<option value="5.75">(GMT +5:45) Kathmandu</option>
		      	<option value="6.0">(GMT +6:00) Almaty, Dhaka, Colombo</option>
		      	<option value="7.0">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
		      	<option value="8.0">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
		      	<option value="9.0">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
		      	<option value="9.5">(GMT +9:30) Adelaide, Darwin</option>
		      	<option value="10.0">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
		      	<option value="11.0">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
		      	<option value="12.0">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
    		</select>
    		<br /><br />
    		
    		Email:<br />
    		<input type='email' name='email' value='' required><br /><br />

    		Password:<br />
    		<input type='password' name='password' value='' required><br /><br />

    		<input type='submit' value='Sign up' class='submit'>
		</fieldset>
	</form>
</section>