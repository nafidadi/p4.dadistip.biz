<?php foreach($posts as $post): ?>
<section class='posts'>
	<article>
    		<h4><?php echo $post['first_name']?> <?php echo $post['last_name']?> commented on 
			<?php echo $post['hotel_name']?>:</h4>
		
    		<time datetime="<?php echo Time::display($post['created'],'Y-m-d G:i')?>">
        		<?php echo Time::display($post['created'])?>
    		</time>

    		<p><?php echo $post['content']?></p>
		
    		<?php if($user->user_id == $post['user_id']): ?>
                        
    			<a class='submit' href='/posts/edit/<?=$post['post_id']?>'>Edit</a>
         		<a class='submit' href='/posts/delete/<?=$post['post_id']?>'>Delete</a>        
         		<br />
         	<?php endif; ?>  
		<hr />
	</article>
</section>

<?php endforeach; ?>
