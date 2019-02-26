<?php snippet('siteheader'); ?>

<article>
    <?php snippet('parts/pageheader'); ?>

    <section class="container mx-auto px-16">
        <?php foreach($page->pricetable()->toStructure() as $room):?>

        <table class="w-full mb-4 border-b border-solid border-grey-light">
            <tbody class="flex flex-col md:flex-row">
                <tr class="flex flex-col w-full md:w-1/4 items-stretch">
                    <th class="bg-grey-light text-center text-grey-darker w-2/3 md:w-full p-16 md:border-r border-solid border-white md:h-120 md:py-24 w-full">
                        <p><?= $room->description() ?></p>
                    </th>
                    <td class="">
                        <picture>
                            <source type="image/jpeg" media="(max-width: 768px)" srcset="<?= $room->image()->toFile()->thumb(['width'=> 768,'height'=> 512,'crop'=> true])->url(); ?>">
                            <source type="image/jpeg" media="(min-width: 1300px)" srcset="<?= $room->image()->toFile()->thumb(['width'=> 320,'height'=> 210,'crop'=> true])->url(); ?>">
                            <img src="<?= $room->image()->toFile()->thumb(['width'=> 768,'height'=> 512,'crop'=> true])->url(); ?>" class="block w-full lazyload">
                        </picture>
                    </td>
                </tr>
                <tr class="flex flex-row md:flex-col w-full md:w-1/4 border-b border-solid border-white">
                    <th scope="row" class="bg-grey-light text-left md:text-center text-grey-darker w-2/3 md:w-full p-16 md:border-r border-solid border-white md:h-120 md:py-24 md:flex-none">
                        <p class=" uppercase tracking-wide font-regular"><?= t('season_low') ?></p>
                        <p class="font-regular"><?= $site->lowseason()->kt() ?></p>
                    </th>
                    <td class="bg-grey-light md:bg-white text-left md:text-center text-grey-darker w-1/3 md:w-full min-w-96 p-16 md:border-r border-solid border-grey-light md:flex-grow flex items-center justify-center" >
                        <p class="text-30 whitespace-no-wrap">&euro; <?= $room->lowprice() ?></p>
                    </td>
                </tr>

                <tr class="flex flex-row md:flex-col w-full md:w-1/4 border-b border-solid border-white">
                    <th scope="row" class="bg-grey-light text-left md:text-center text-grey-darker w-2/3 md:w-full p-16 md:border-r border-solid border-white md:h-120 md:py-24 md:flex-none">
                        <p class=" uppercase tracking-wide font-regular"><?= t('season_mid') ?></p>
                        <p class="font-regular"><?= $site->midseason()->kt() ?></p>
                    </th>
                    <td class="bg-grey-light md:bg-white text-left md:text-center text-grey-darker w-1/3 md:w-full min-w-96 p-16 md:border-r border-solid border-grey-light md:flex-grow flex items-center justify-center" >
                        <p class="text-30 whitespace-no-wrap">&euro; <?= $room->midprice() ?></p>
                    </td>
                </tr>

                <tr class="flex flex-row md:flex-col w-full md:w-1/4 border-b border-solid border-white">
                    <th scope="row" class="bg-grey-light text-left md:text-center text-grey-darker w-2/3 md:w-full p-16 md:border-r border-solid border-white md:h-120 md:py-24 md:flex-none">
                        <p class=" uppercase tracking-wide font-regular"><?= t('season_high') ?></p>
                        <p class="font-regular"><?= $site->highseason()->kt() ?></p>
                    </th>
                    <td class="bg-grey-light md:bg-white text-left md:text-center text-grey-darker w-1/3 md:w-full min-w-96 p-16 md:border-r border-solid border-grey-light md:flex-grow flex items-center justify-center" >
                        <p class="text-30 whitespace-no-wrap">&euro; <?= $room->highprice() ?></p>
                    </td>
                </tr>

            </tbody>
        </table>
    <?php endforeach; ?>
    </section>

    <?php foreach($page->blocks()->toBuilderBlocks() as $block){
        snippet('blocks/' . $block->_key(), array('data' => $block));
    } ?>
</article>

<?php snippet('sitefooter'); ?>
