<?php foreach($hotelinfo as $hotel): ?>
        <ul>
                <li><a href='http://<?=$hotel['website']?>'><?=$hotel['hotel_name']?></a></li>
                <li><?=$hotel['street_address']?></li>
                <li><?=$hotel['city']?>, <?=$hotel['state']?> <?=$hotel['zipcode']?></li>
                <li><?=$hotel['hotel_id']?></li>
		<li><a href='http://<?=$hotel['website']?>'><?=$hotel['website']?></a></li>
                <li><?=$hotel['email']?></li>
        </ul>
	<p id='comment'><a href='#'>Leave A Comment</a></p>
	<hr />
<?php endforeach; ?>
