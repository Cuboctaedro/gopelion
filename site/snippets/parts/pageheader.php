<div class="text-center px-16 sm:px-p7 md:px-100 lg:px-160">
    <header>
        <h1 class="subheading text-purple"><?= $page->title(); ?></h1>
    </header>
    <hr class="my-32 block h-0 border-b border-black border-solid w-120" />
    <?php if($page->introtext()->isNotEmpty()): ?>
    <section class="maintext paragraphs mb-48">
        <?= $page->introtext()->kt(); ?>
    </section>
    <?php endif; ?>
</div>
