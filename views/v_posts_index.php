<section>
	<h4>This is the profile of <?=$user->first_name?>:</h4>
	<ul>
        	<li>First Name: <?=$user->first_name?></li>
        	<li>Last Name: <?=$user->last_name?></li>
        	<li>Nick Name: <?=$user->nick_name?></li>
        	<li>Email: <?=$user->email?></li>
	</ul>
</section>

<section>
<h4>The following are your posts:</h4>
<?php foreach($posts as $post): ?>
	<?php if($post['user_id'] == $user->user_id): ?>
	<article>
		<p>You commented about <?=$post['hotel_name']?>:</p>
		
		<time datetime="<?php echo Time::display($post['modified'],'Y-m-d G:i')?>">
			<?php echo Time::display($post['modified'])?>
		</time>
		<br />
		<?php echo $post['content']?><br />		
		<a href='/posts/edit/<?=$post['post_id']?>'>Edit</a>
       		<a href='/posts/delete/<?=$post['post_id']?>'>Delete</a>        
       		<br />
		<hr />
	</article>
	<?php endif; ?>
<?php endforeach; ?>
</section>
