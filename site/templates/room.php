<?php snippet('siteheader'); ?>

<article>
    <?php snippet('parts/pageheader'); ?>

    <section class="mb-72 slider-gallery">

    <?php if($page->gallery()->isNotEmpty()): ?>
        <ul class="list-reset siema">
            <?php foreach($page->gallery()->toStructure() as $pic): ?>
                <li class="slide">
                    <?php snippet('pictures/full', ['image' => $pic->image()->toFile()]); ?>
                    <p class="text-center text-white -mt-72"><?= $pic->caption() ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    </section>

    <div class="container mx-auto flex flex-row flex-wrap">
        <section class="w-full md:w-1/2 mb-72 px-16">
            <h2 class="text-24 sm:text-30 md:text-36 uppercase tracking-wide font-regular leading-none text-purple mb-24"><?= t('amenities') ?></h2>
            <div class="w-full pb-32">
                <hr class="w-96 h-0 border-b border-solid border-grey-dark float-left" />
            </div>
            <div class="w-full mb-32 pl-48">
                <ul class="list-reset">
                    <?php foreach($page->amenities()->toStructure() as $entry): ?>
                        <li class="leading-loose"><?= $entry->item() ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>
        <section class="w-full md:w-1/2 mb-72 px-16">
            <h2 class="text-24 sm:text-30 md:text-36 uppercase tracking-wide font-regular leading-none text-purple mb-24"><?= t('pricesandoffers') ?></h2>
            <div class="w-full pb-32 ">
                <hr class="w-96 h-0 border-b border-solid border-grey-dark float-left" />
            </div>
            <div class="w-full mb-32 pl-48">
                <h3 class="font-bold leading-loose mb-8"><?= t('season_low') ?></h3>
                <p class=""><?= $site->lowseason()->kt() ?></p>
                <p class="text-30 font-bold mb-48 -mt-8">&euro; <?= $page->lowprice() ?></p>
                <h3 class="font-bold leading-loose mb-8"><?= t('season_mid') ?></h3>
                <p class=""><?= $site->midseason()->kt() ?></p>
                <p class="text-30 font-bold mb-48 -mt-8">&euro; <?= $page->midprice() ?></p>
                <h3 class="font-bold leading-loose mb-8"><?= t('season_high') ?></h3>
                <p class=""><?= $site->highseason()->kt() ?></p>
                <p class="text-30 font-bold mb-48 -mt-8">&euro; <?= $page->highprice() ?></p>
            </div>
            <div class="w-full mb-32 pl-48">
            <a class="no-underline uppercase tracking-wide px-24 py-16 text-white bg-purple hover:bg-purple-light hover:shadow-2 effect" href="<?= $pricespage->url() ?>"><?= $pricespage->title() ?></a>
            </div>
        </section>
    </div>


    <?php foreach($page->blocks()->toBuilderBlocks() as $block){
        snippet('blocks/' . $block->_key(), array('data' => $block));
    } ?>
</article>

<?php snippet('sitefooter'); ?>
