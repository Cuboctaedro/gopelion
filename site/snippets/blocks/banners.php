<?php if($data->banner()->toStructure()->count() == 1): ?>

    <div class="relative w-full mb-72 banner zoomimage">
    <?php foreach ($data->banner()->toStructure() as $banner): ?>
        <?php snippet('pictures/full', ['image' => $banner->image()->toFile()]); ?>
        <div class="centered text-center w-4/5">
            <h2 class=" uppercase text-48 sm:text-72 md:text-120 text-bold text-white leading-none mb-16"><?= $banner->heading() ?></h2>
            <a class="inline-block px-16 sm:px-24 py-8 font-bold text-21 uppercase tracking-wide shadow-1 text-white bg-transparent opacity-50 hover:shadow-3 hover:text-grey-darker hover:bg-white hover:opacity-75 effect" href="<?= $banner->link()->toPage()->url() ?>" title="<?= $banner->link()->toPage()->title() ?>"><?= t('readmore'); ?></a>
        </div>
    <?php endforeach; ?>
    </div>

<?php elseif($data->banner()->toStructure()->count() == 3): ?>
    <div class="text-center px-16 sm:px-p7 md:px-100 lg:px-160">
        <?php if($data->blockheading()->isNotEmpty()): ?>
        <h2 class="subheading text-purple mb-50"><?= $data->blockheading(); ?></h2>
        <?php endif; ?>
        <div class="flex flex-row flex-wrap">
            <?php foreach ($data->banner()->toStructure() as $banner): ?>
            <div class="w-full sm:w-1/3 p-50 sm:p-16 ">
                <div class="relative">
                    <picture>
                        <source type="image/jpeg" media="(max-width: 480px)" srcset="<?= $banner->image()->toFile()->thumb(['width'=> 480,'height'=> 320,'crop'=> true])->url(); ?>">
                        <source type="image/jpeg" media="(max-width: 768px)" srcset="<?= $banner->image()->toFile()->thumb(['width'=> 768,'height'=> 512,'crop'=> true])->url(); ?>">
                        <source type="image/jpeg" media="(min-width: 769px)" srcset="<?= $banner->image()->toFile()->thumb(['width'=> 480,'height'=> 320,'crop'=> true])->url(); ?>">
                        <img src="<?= $banner->image()->toFile()->thumb(['width'=> 768,'height'=> 512,'crop'=> true])->url(); ?>" class="block w-full lazyload">
                    </picture>
                    <div class="absolute pin m-24">
                        <a class="absolute pin bg-purple text-white flex items-center justify-center uppercase text-21 font-bold tracking-wide opacity-0 hover:opacity-75 effect hover:text-white" href="<?= $banner->link()->toPage()->url() ?>" title="<?= $banner->link()->toPage()->title() ?>">
                            <span><?= t('readmore'); ?></span>
                        </a>
                    </div>
                </div>
                <h3 class="uppercase tracking-wide font-bold text-center mt-16 text-25"><?= $banner->heading() ?></h3>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>
