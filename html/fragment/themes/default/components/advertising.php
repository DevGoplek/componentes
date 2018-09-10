<?php 
	$advertising = Page::byUrlQ("8NXfTS9vme");
    $advert = Page::search(array(
        'idpage' => $advert->idpage,
        'fragments' => array('subtit-adv')
    ));
    $adv = $advert['records'];
?>

<article class="grid-container">
    <div class="grid-x cell">
        <div class="small-12 callout primary text-center">
            <h3><?= $advertising->title ?></h3>
        	<?php foreach ($adv as $ad) { ?>
                <p><?= $ad->fragments['subtit-adv']->value ?></p>
            <?php  } ?>
        </div>
    </div>
</article>