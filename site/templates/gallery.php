<?php snippet('siteheader'); ?>

<article>
    <?php snippet('parts/pageheader'); ?>

    <section class="container mx-auto photo-gallery-container">
        <ul class="gallery-controls list-reset flex flex-row justify-center mb-48">
            <li><button data-filter="ping" data-reset="true" class="uppercase font-bold tracking-wide text-16 text-grey-dark px-16"><?= t('gallery_all'); ?></button></li>
            <li><button data-filter="ping" data-filter-tag="ghermaniko" class="uppercase font-bold tracking-wide text-16 text-grey-dark px-16"><?= t('gallery_ghermaniko'); ?></button></li>
            <li><button data-filter="ping" data-filter-tag="victoria" class="uppercase font-bold tracking-wide text-16 text-grey-dark px-16"><?= t('gallery_victoria'); ?></button></li>
            <li><button data-filter="ping" data-filter-tag="mamma" class="uppercase font-bold tracking-wide text-16 text-grey-dark px-16"><?= t('gallery_mammamia'); ?></button></li>
            <li><button data-filter="ping" data-filter-tag="location" class="uppercase font-bold tracking-wide text-16 text-grey-dark px-16"><?= t('gallery_location'); ?></button></li>
            <li><button data-filter="ping" data-filter-tag="activities" class=" uppercase font-bold tracking-wide text-16 text-grey-dark px-16"><?= t('gallery_activities'); ?></button></li>
        </ul>
        <div class="list-reset ping photo-gallery" style="column-count: 4; column-gap: 0;">
            <?php foreach($page->gallery()->toStructure() as $picture): ?>
                <?php $image = $picture->galleryimage()->toFile();?>
                <?php if($image->width() > $image->height()):?>
                    <a
                        class="p-16 w-full block"
                        data-tags="<?php foreach ($picture->tags()->split() as $tag): ?> <?= $tag ?> <?php endforeach ?>"
                        href="<?= $image->thumb(['width'=> 1600,'height'=> 1200,'crop'=> true])->url(); ?>"
                        data-at-480="<?= $image->thumb(['width'=> 480,'height'=> 320,'crop'=> true])->url(); ?>"
                        data-at-768="<?= $image->thumb(['width'=> 768,'height'=> 512,'crop'=> true])->url(); ?>"
                        data-at-1200="<?= $image->thumb(['width'=> 1200,'height'=> 800,'crop'=> true])->url(); ?>"
                        data-at-1600="<?= $image->thumb(['width'=> 1600,'height'=> 1200,'crop'=> true])->url(); ?>"
                    >
                    <picture>
                        <source type="image/jpeg" media="(max-width: 480px)" srcset="<?= $image->thumb(['width'=> 480,'height'=> 320,'crop'=> true])->url(); ?>">
                        <source type="image/jpeg" media="(min-width: 481px)" srcset="<?= $image->thumb(['width'=> 768,'height'=> 512,'crop'=> true])->url(); ?>">
                        <img src="<?= $image->thumb(['width'=> 768,'height'=> 512,'crop'=> true])->url(); ?>" class="block w-full lazyload">
                    </picture>
                </a>
            <?php else: ?>
                <a
                    class="p-16 w-full block"
                    data-tags="<?php foreach ($picture->tags()->split() as $tag): ?> <?= $tag ?> <?php endforeach ?>"
                    href="<?= $image->thumb(['width'=> 800,'height'=> 1200,'crop'=> true])->url(); ?>"
                    data-at-480="<?= $image->thumb(['width'=> 480,'height'=> 720,'crop'=> true])->url(); ?>"
                    data-at-768="<?= $image->thumb(['width'=> 768,'height'=> 1152,'crop'=> true])->url(); ?>"
                    data-at-1600="<?= $image->thumb(['width'=> 800,'height'=> 1200,'crop'=> true])->url(); ?>"
                >
                    <picture>
                        <source type="image/jpeg" media="(max-width: 480px)" srcset="<?= $image->thumb(['width'=> 480,'height'=> 720,'crop'=> true])->url(); ?>">
                        <source type="image/jpeg" media="(min-width: 481px)" srcset="<?= $image->thumb(['width'=> 768,'height'=> 1152,'crop'=> true])->url(); ?>">
                        <img src="<?= $image->thumb(['width'=> 768,'height'=> 1152,'crop'=> true])->url(); ?>" class="block w-full lazyload">
                    </picture>
                </a>
            <?php endif; ?>
        <?php endforeach; ?>
        </div>
    </section>

    <?php foreach($page->blocks()->toBuilderBlocks() as $block){
        snippet('blocks/' . $block->_key(), array('data' => $block));
    } ?>
</article>

<?php snippet('sitefooter'); ?>
