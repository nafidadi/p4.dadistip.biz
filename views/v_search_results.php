<?php foreach($hotelinfo as $hotel): ?>
        <ul>
                <li><a href='http://<?=$hotel['website']?>'><?=$hotel['hotel_name']?></a></li>
                <li><?=$hotel['street_address']?></li>
                <li><?=$hotel['city']?>, <?=$hotel['state']?> <?=$hotel['zipcode']?></li>
                <li><?=$hotel['hotel_id']?></li>
		<li><a href='http://<?=$hotel['website']?>'><?=$hotel['website']?></a></li>
                <li><?=$hotel['email']?></li>
        </ul>

	<div id='comment'>
		<p><?php echo $hotel['nick_name']?> posted:</p>
		<time datetime="<?php echo Time::display($hotel['created'],'Y-m-d G:i')?>">
        		<?php echo Time::display($hotel['created'])?>
    		</time>

    		<p><?php echo $hotel['content']?></p>
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
