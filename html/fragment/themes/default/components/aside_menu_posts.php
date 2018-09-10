<?php 
  $aside_menu = Page::byUrlQ("bcuukjITrs");
  $aside = Page::search(array(
      'idpage' => $aside->idpage,
      'fragments' => array('option-menu1', 'option-menu2', 'option-menu3', 'option-menu4')
  ));
  $asd = $aside['records'];
?> 
 
      <div class="medium-3 cell" data-sticky-container>
        <div class="sticky" data-sticky data-anchor="content">
          <h4><?= $aside_menu->title ?></h4>
          <ul>
            <?php foreach ($asd as $as) { ?>
                <li><a href="#"><?= $as->fragments['option-menu1']->value ?></a></li>
                <li><a href="#"><?= $as->fragments['option-menu2']->value ?></a></li>
                <li><a href="#"><?= $as->fragments['option-menu3']->value ?></a></li>
                <li><a href="#"><?= $as->fragments['option-menu4']->value ?></a></li>
            <?php  } ?>
          </ul>
        </div>
      </div>