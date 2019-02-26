<?php snippet('siteheader'); ?>

<article>
    <?php
    snippet('parts/pageheader');
    foreach($page->blocks()->toBuilderBlocks() as $block){
        snippet('blocks/' . $block->_key(), array('data' => $block));
    }
    ?>
</article>

<?php snippet('sitefooter'); ?>
