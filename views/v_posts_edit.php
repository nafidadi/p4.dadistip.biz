<article id='edit_post'>
		<form name='editpost' id='editpost' method='POST' action='/posts/p_edit/<?=$post['post_id']?>'>
    			<textarea name='content' rows="2" cols="80"><?=$post['content']?></textarea>
			<input name='hotel_id' type='hidden' value='<?=$hotel['hotel_id']?>'>
   			<input type='submit' value='RePost' class='submit'>
		</form> 
</article>
