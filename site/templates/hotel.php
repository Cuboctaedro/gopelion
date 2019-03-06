<?php snippet('siteheader'); ?>

<article>
    <?php snippet('parts/pageheader');?>

    <section>
        <?php
        $i = 0;
        foreach($rooms as $room):
            $i++ ;
            if($i % 2 == 0):
                $layout = 'imagetext';
            else:
                $layout = 'textimage';
            endif;
            snippet('blocks/textandimage', [
                'text'=> $room->smalltext(),
                'heading' => $room->title(),
                'image' => $room->gallery()->toStructure()->first()->image(),
                'morelink' => $room->url(),
                'layout' => $layout
            ]);
            endforeach;
        ?>

    </section>


    <?php foreach($page->blocks()->toBuilderBlocks() as $block){
        snippet('blocks/' . $block->_key(), array('data' => $block));
    }
    ?>
</article>

<?php snippet('sitefooter'); ?>
