<?php

    //register_module('fragment');
    //Cover
    $home_title = $fragments['title-cover']['record'];
    $home_subtitle = $fragments['subt-cover']['record'];

    //Component description_image
    $desc_image = Page::byUrlQ("ESaVCXg6B3");
    $des_img = Page::search(array(
        'idpage' => $desc_image->idpage,
        'fragments' => array('title-desc','text-desc','img-desc')
    ));
    $desc = $des_img['records'];

    //Component feature
    $features = Page::search(array(
        'idparent' => $desc_image->idpage,
        'fragments' => array('desc-feature')
    ));

    $feature = $features['records'];

    //Component menu_count
    $menu_count = Page::byUrlQ("ARg5A3fmXt");
    $menu_c = Page::search(array(
        'idparent' => $menu_count->idpage,
        'fragments' => array('desc-count')
    ));

    $menu = $menu_c['records'];

    //Component image_gallery
    $image_gallery = Page::byUrlQ("f-X00mxAv0");
    $images = Page::search(array(
        'idparent' => $image_gallery->idpage,
        'fragments' => array('img-work')
    ));

    $imgs = $images['records'];

    //Component Advertising
    $advertising = Page::byUrlQ("8NXfTS9vme");
    $advert = Page::search(array(
        'idpage' => $advert->idpage,
        'fragments' => array('subtit-adv')
    ));
    $adv = $advert['records'];


?><!DOCTYPE html>
<html>
<head>
    <?php head(); ?>
    <link rel="stylesheet" href="fragment/themes/default/design/css/foundation.css">
    
</head>
<body>
    
    <!-- Block Features -->
    <section class="block features" id="caracteristicas">
        <div class="holder">
            <div class="container-fluid">
                <div class="content">
                    <section class="top-bar" id="mainNavigation">
                        <div class="top-bar-left">
                            <ul class="menu vertical medium-horizontal">
                                <li class="menu-text hide-for-small-only">Marketing Site</li>
                                <li><a href="#">One</a></li>
                                <li><a href="#">Two</a></li>
                            </ul>
                        </div>
                        <div class="top-bar-right">
                            <ul class="menu vertical medium-horizontal">
                                <li><a href="#">Three</a></li>
                                <li><a href="#">Four</a></li>
                                <li><a href="#">Five</a></li>
                                <li><a href="#">Six</a></li>
                            </ul>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </section>
    <!-- /.Features -->

    <section class="block features" id="caracteristicas">
        <div class="holder">
            <div class="container-fluid">
                <div class="content">
                    <article class="grid-container">
                        <div class="text-center">
                            <h1><?= $home_title->value;?></h1>
                            <p class="lead"><?= $home_subtitle->value;?></p>
                            <a href="#" class="button large">Learn More</a>
                            <a href="#" class="button large hollow">Learn Less</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <section class="block features" id="caracteristicas">
        <div class="holder">
            <div class="container-fluid">
                <div class="content">
                    <article class="grid-container">
                        <div class="grid-x grid-margin-x">
                        <div class="medium-6 cell small-order-2 medium-order-1">
                            <?php foreach ($desc as $ds) { ?>
                                <h2><?= $ds->fragments['title-desc']->value ?></h2>
                                <p><?= $ds->fragments['text-desc']->value ?></p>
                            <?php  } ?>
                        </div>
                        <div class="medium-6 cell small-order-1 medium-order-2">
                            <?php foreach ($desc as $ds) { ?>
                                <div class="thumbnail"><?= $ds->fragments['img-desc']->value ?></div>
                            <?php  } ?>
                        </div>
                        </div>
                        <div class="grid-x grid-margin-x">
                            <?php foreach ($feature as $ft) { ?>
                                <div class="medium-4 cell">
                                    <h3><?= $ft->title ?></h3>
                                    <p><?= $ft->fragments['desc-feature']->value ?></p>
                                </div>
                            <?php  } ?> 
                        </div>
                    </article>
                        
                </div>
            </div>
        </div>
    </section>

    <section class="block features" id="caracteristicas">
        <div class="holder">
            <div class="container-fluid">
                <div class="content">
                <article class="grid-container">
                    <div class="row column">
                        <ul class="vertical medium-horizontal menu expanded text-center">
                             <?php foreach ($menu as $mo) { ?>
                                <li><a href="#"><div class="stat"><?= $mo->fragments['desc-count']->value ?></div><span><?= $mo->title ?></span></a></li>
                            <?php  } ?> 
                            
                        </ul>
                    </div>
                </article>
                </div>
            </div>
        </div>
    </section>

    <section class="block features" id="caracteristicas">
        <div class="holder">
            <div class="container-fluid">
                <article class="grid-container">
                    <div class="row column">
                        <h3><?= $image_gallery->title ?></h3>
                    </div>
                    <div class="grid-x grid-margin-x medium-up-3 large-up-4">
                        
                            <?php foreach ($imgs as $img) { ?>
                                <div class="cell">
                                <div class="thumbnail">
                                    <?= $img->fragments['img-work']->value ?>
                                </div>
                                </div>
                            <?php  } ?> 
                            
                        
                    </div>
                </article>
                </div>
            </div>
        </div>
    </section>



     <section class="block features" id="caracteristicas">
        <div class="holder">
            <div class="container-fluid">
                <div class="content">
                    <?php include 'components/menuFooter.php' ?>
                </div>
            </div>
        </div>
    </section>


    <script src="fragment/themes/default/design/js/vendor/jquery.js"></script>
    <script src="fragment/themes/default/design/js/vendor/what-input.js"></script>
    <script src="fragment/themes/default/design/js/vendor/foundation.js"></script>
    <script src="fragment/themes/default/design/js/app.js"></script>
</body>
</html>