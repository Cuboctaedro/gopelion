<?php if($data->banner()->toStructure()->count() == 1): ?>

    <div class="relative w-full mb-72 banner">
    <?php foreach ($data->banner()->toStructure() as $banner): ?>
        <?php snippet('pictures/full', ['image' => $banner->image()->toFile()]); ?>
        <div class="centered text-center">
            <h2 class=" uppercase text-48 sm:text-72 md:text-144 text-bold text-white leading-none mb-16"><?= $banner->heading() ?></h2>
            <a class="inline-block px-16 sm:px-24 py-8 uppercase bg-white text-grey-darker no-underline tracking-wide shadow-1 hover:shadow-3 banner-button" href="<?= $banner->link()->toPage()->url() ?>" title="<?= $banner->link()->toPage()->title() ?>"><?= t('readmore'); ?></a>
        </div>
    <?php endforeach; ?>
    </div>

<?php elseif($data->banner()->toStructure()->count() == 2): ?>

    <div class="flex flex-row flex-wrap double-banner mb-72">
        <?php foreach ($data->banner()->toStructure() as $banner): ?>
            <div class="relative w-full md:w-1/2 banner-{{ loop.index }} banner">
                <picture>
                    <source type="image/jpeg" media="(max-width: 480px)" srcset="<?= $banner->image()->toFile()->thumb(['width'=> 480,'height'=> 320,'crop'=> true])->url(); ?>">
                    <source type="image/jpeg" media="(max-width: 768px)" srcset="<?= $banner->image()->toFile()->thumb(['width'=> 768,'height'=> 512,'crop'=> true])->url(); ?>">
                    <source type="image/jpeg" media="(min-width: 769px)" srcset="<?= $banner->image()->toFile()->thumb(['width'=> 1200,'height'=> 800,'crop'=> true])->url(); ?>">
                    <img src="<?= $banner->image()->toFile()->thumb(['width'=> 1200,'height'=> 800,'crop'=> true])->url(); ?>" class="block w-full lazyload">
                </picture>
                <div class="centered text-center">
                    <h2 class=" uppercase text-24 sm:text-36 md:text-72 text-bold text-white leading-none mb-16"><?= $banner->heading() ?></h2>
                    <a class="inline-block px-16 sm:px-24 py-16 uppercase bg-white text-grey-darker no-underline tracking-wide shadow-1 hover:shadow-3 banner-button" href="<?= $banner->link()->toPage()->url() ?>" title="<?= $banner->link()->toPage()->title() ?>"><?= t('readmore'); ?></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

<?php elseif($data->banner()->toStructure()->count() == 3): ?>
    <div class="container mx-auto mb-72">
        <?php if($data->blockheading()->length() > 0): ?>
            <h2 class="subheading text-purple"><?= $data->blockheading(); ?></h2>
        <?php endif; ?>
        <div class="flex flex-row flex-wrap">
            <?php foreach ($data->banner()->toStructure() as $banner): ?>
            <div class="w-full sm:w-1/3 p-48 sm:p-16 ">
                <div class="relative">
                    <picture>
                        <source type="image/jpeg" media="(max-width: 480px)" srcset="<?= $banner->image()->toFile()->thumb(['width'=> 480,'height'=> 320,'crop'=> true])->url(); ?>">
                        <source type="image/jpeg" media="(max-width: 768px)" srcset="<?= $banner->image()->toFile()->thumb(['width'=> 768,'height'=> 512,'crop'=> true])->url(); ?>">
                        <source type="image/jpeg" media="(min-width: 769px)" srcset="<?= $banner->image()->toFile()->thumb(['width'=> 480,'height'=> 320,'crop'=> true])->url(); ?>">
                        <img src="<?= $banner->image()->toFile()->thumb(['width'=> 768,'height'=> 512,'crop'=> true])->url(); ?>" class="block w-full lazyload">
                    </picture>
                    <div class="absolute pin m-24">
                        <a class="absolute pin bg-purple text-white flex items-center justify-center uppercase no-underline text-14 tracking-wide opacity-0 hover:opacity-75 effect" href="<?= $banner->link()->toPage()->url() ?>" title="<?= $banner->link()->toPage()->title() ?>">
                            <span><?= t('readmore'); ?></span>
                        </a>
                    </div>
                </div>
                <h3 class="uppercase no-underline tracking-wide font-bold text-center mt-16 text-16"><?= $banner->heading() ?></h3>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>
