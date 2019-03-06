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
