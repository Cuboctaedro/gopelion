<header class="mb-40">
    <h1 class="text-center text-purple text-24 sm:text-30 md:text-48 font-bold uppercase tracking-wide "><?= $page->title(); ?></h1>
</header>
<hr class="mb-40 block h-0 border-b border-black border-solid w-72 mx-auto" />
<section class="container px-8 sm:px-2 md:px-64 mx-auto text-16 sm:text-18 md:text-24 pb-64 text-center md:text-left paragraphs mb-72">
    <?= $page->introtext()->kt(); ?>
</section>
