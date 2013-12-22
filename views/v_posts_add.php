<article id='new_post'>
        <form name='newpost' method='POST' action='/posts/p_add'>
                <label for='content'>Post Your Comments:</label><br />
                <textarea name='content' id='content' rows="2" cols='80'></textarea><br />
                <input name='hotel_id' type='hidden' value='<?=$hotel['hotel_id']?>'>
        	<input type='submit' value='Post' class='submit'>
	</form>
</article>
