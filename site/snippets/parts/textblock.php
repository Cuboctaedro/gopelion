<div class="w-full md:w-650 lg:w-710 md:flex-none px-16 sm:px-p7 text-center md:text-left <?php e($layout == 'textimage', ' md:pl-100 lg:pl-160 md:pr-50 ', ' md:pr-100 lg:pr-160 md:pl-50 md:order-2 '); ?> ">
    <h2 class="subheading "><?= $heading ?></h2>
    <hr class="my-32 block h-0 border-b border-black border-solid w-120 md:ml-0" />
    <div class="maintext paragraphs mb-32" <?php e($text->length() > 500, ' data-role="moreless" '); ?>>
        <?php if($text->length() > 500): ?>
        <div data-role="truncated">
            <?= $text->excerpt(500, false); ?>
        </div>
        <div data-role="fulltext" hidden>
            <?= $text->kt(); ?>
        </div>
        <button class="font-bold link mt-24" data-role="readmore"><?= t('readmore'); ?></button>
        <button class="font-bold link mt-24" data-role="readless" hidden><?= t('readless'); ?></button>
        <?php else: ?>
            <?= $text->kt(); ?>
        <?php endif; ?>
    </div>
</div>
