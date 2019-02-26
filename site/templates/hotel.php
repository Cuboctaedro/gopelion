<?php snippet('siteheader'); ?>

<article>
    <?php snippet('parts/pageheader');?>

    <section>
        <?php
        $i = 0;
        foreach($rooms as $room):
        ?>
        <?php $i++ ;?>
        <div class="flex flex-row flex-wrap mb-72">
            <div class="w-full md:w-2/5 flex flex-col justify-end <?php e($i % 2 == 0, ' md:order-2 ', ' md:order-1 items-end '); ?>" >
                <h2
                    class="text-24 uppercase tracking-wide leading-none text-purple w-full max-w-480 mx-24 mb-16 text-center <?php e($i % 2 == 0, ' md:text-left" ', ' md:text-right '); ?>"
                    data-aos="<?php e($i % 2 == 0, 'fade-left', 'fade-right'); ?>"
                ><?= $room->title() ?></h2>
                <div class="text-16 md:text-18 text-center {% if loop.index is odd %} md:text-right {% else %} md:text-left {% endif %} paragraphs mx-24 mb-24 max-w-480">
                    <?= $room->smalltext()->kt(); ?>
                </div>
                <div class="mx-24">
                    <a href="<?= $room->url() ?>" class=" text-14 md:text-16 line"><?= t('readmore'); ?></a>
                </div>
            </div>

            <div class="w-full md:w-3/5 <?php e($i % 2 == 0, ' md:order-1 ', ' md:order-2 '); ?>">
                <?php if($room->gallery()->isNotEmpty()) {
                    snippet('pictures/med', ['image' => $room->gallery()->toStructure()->first()->image()->toFile()]);
                } ?>
            </div>
        </div>
    <?php endforeach; ?>
    </section>


    <?php foreach($page->blocks()->toBuilderBlocks() as $block){
        snippet('blocks/' . $block->_key(), array('data' => $block));
    }
    ?>
</article>

<?php snippet('sitefooter'); ?>
