<div class="relative w-full mb-72 banner zoomimage">
    <?php snippet('pictures/full', ['image' => $data->image()->toFile()]); ?>
    <div class="centered text-center w-4/5">
        <h2 class=" uppercase text-48 sm:text-72 md:text-120 text-bold text-white leading-none mb-16"><?= $data->heading() ?></h2>
        <a class="inline-block px-16 sm:px-24 py-8 font-bold text-21 uppercase tracking-wide shadow-1 text-white bg-transparent opacity-50 hover:shadow-3 hover:text-grey-darker hover:bg-white hover:opacity-75 effect" href="<?= $data->link()->toPage()->url() ?>" title="<?= $data->link()->toPage()->title() ?>"><?= t('readmore'); ?></a>
    </div>
</div>
