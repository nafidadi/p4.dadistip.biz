<?php foreach($hotelinfo as $hotel): ?>
	<address>
		<a href='http://<?=$hotel['website']?>'><?=$hotel['hotel_name']?></a><br />
                <?=$hotel['street_address']?><br />
		<?=$hotel['city']?>, <?=$hotel['state']?> <?=$hotel['zipcode']?><br />
                contact: <?=$hotel['hotel_id']?>  <?=$hotel['email']?><br />
                website: <a href='http://<?=$hotel['website']?>'><?=$hotel['website']?></a>
	</address>

	<div id='comment'>
		<?php if($hotel['content'] != NULL): ?>
		<article>
			<time datetime="<?php echo Time::display($hotel['created'],'Y-m-d G:i')?>">
        			<?php echo Time::display($hotel['created'])?>
    			</time>
			<?php echo "posted by ".$hotel['nick_name'] .": "?>
			<br />

    			<?php echo $hotel['content']?>
		</article>
		<?php endif; ?>

		<?php if($user): ?>
		<section id='new_post'>
			<form name='newpost' id='newpost' method='POST' action='/posts/p_add'>
			<fieldset>
    				<label for='content'>Post Your Comments:</label><br />
    				<textarea name='content' id='content' rows="3" cols='100'></textarea><br />
				<input name='hotel_id' type='hidden' value='<?=$hotel['hotel_id']?>'>
   				<input type='submit' value='Post' class='submit'>
			</fieldset>
			</form> 

		</section>
                <?php else: ?>
			<a href='#'>Leave A Comment</a>
                <?php endif; ?>
	</div>

	<hr />
<?php endforeach; ?>
