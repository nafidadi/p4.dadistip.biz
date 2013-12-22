<div id='search_results'>
<?php foreach($hotelinfo as $hotel): ?>
	<address>
		<a href='http://<?=$hotel['website']?>'><?=$hotel['hotel_name']?></a><br />
                <?=$hotel['street_address']?><br />
		<?=$hotel['city']?>, <?=$hotel['state']?> <?=$hotel['zipcode']?><br />
		contact: <?php echo '('.substr($hotel['hotel_id'], 0, 3).')'.substr($hotel['hotel_id'], 3, 3).
			'-'.substr($hotel['hotel_id'], 6)?> <?=$hotel['email']?><br />
                website: <a href='http://<?=$hotel['website']?>'><?=$hotel['website']?></a>
	</address>

	<section>
		<?php if($hotel['content'] != NULL): ?>
		<article id='posts'>
			<time datetime="<?=Time::display($hotel['modified'], 'Y-m-d G:i')?>" >
        			<?=Time::display($hotel['modified'])?>
    			</time>
			<?php echo "posted by ".$hotel['nick_name'].": "?>
			<br />

    			<?php echo "&#09;".$hotel['content']?>
		</article>
		<?php endif; ?>

		<?php if($user): ?>
		<article id='new_post'>
			<form name='newpost' method='POST' action='/posts/p_add'>
    				<label for='content'>Post Your Comments:</label><br />
    				<textarea name='content' id='content' rows="2" cols='80' required></textarea><br />
				<input name='hotel_id' type='hidden' value='<?=$hotel['hotel_id']?>'>
   				<input type='submit' value='Post' class='submit'>
			</form> 
		</article>
                <?php else: ?>
			<div class='comment'><a href='#'>Leave A Comment</a></div>
                <?php endif; ?>
	</section>

	<hr />
<?php endforeach; ?>
</div>
