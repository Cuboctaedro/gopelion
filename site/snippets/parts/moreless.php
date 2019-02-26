<div class="text-16 md:text-18 mb-40 max-w-720 px-8 sm:px-16 md:px-120 mx-auto text-center md:text-left paragraphs <?php e($text->length() > 800, ' moreless '); ?>">
    <?php if($text->length() > 800): ?>
    <div class="truncated">
        <?= $text->excerpt(800, false); ?>
    </div>
    <div class="fulltext" hidden>
        <?= $text->kt(); ?>
    </div>
    <button class="readmore text-14 md:text-16 line mt-24"><?= t('readmore'); ?></button>
    <button class="readless text-14 md:text-16 line mt-24" hidden><?= t('readless'); ?></button>
    <?php else: ?>
        <?= $text->kt(); ?>
    <?php endif; ?>
</div>
