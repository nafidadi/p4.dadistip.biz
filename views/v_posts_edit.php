<article id='edit_post'>
<form id='editpost' method='POST' action='/posts/p_edit/<?=$post['post_id']?>'>
    	<textarea name='editpost' rows="2" cols="80"><?=$post['content']?></textarea>
   	<input type='submit' value='Post' class='submit'>
</form> 
</article>
