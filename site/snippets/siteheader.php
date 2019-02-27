<!doctype html>
<html lang="<?= t('isocode'); ?>">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="<?= $page->description(); ?>" />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="canonical" href="<?= $page->url() ?>"/>
    <?php foreach ($kirby->languages() as $lang):?>
        <link rel="alternate" hreflang="<?= t('isocode'); ?>" href="<?= $page->url($lang->code()) ?>" />
    <?php endforeach; ?>

    <?= mix('/app.css') ?>
    </head>

    <body class="leading-normal font-sans text-grey-dark bodywrap">
        <a class="skip-link" href="#main">Skip to content</a>
        <header class="header flex flex-row flex-wrap mb-24 effect" id="siteheader">
            <div class="subtitle uppercase type-14 tracking-wide py-16 px-24"><?= $site->sitesubtitle()->kt() ?></div>
            <div class="phone">
                <button class="show-phone p-16" data-toggle-target="#phones"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"/><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56-.35-.12-.74-.03-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/></svg></button>
                <div class="hidden" id="phones">
                    <span><?= $site->fixed() ?></span>
                    <span><?= $site->mobile() ?></span>
                </div>
            </div>
            <div class="langs">
                <?php foreach ($kirby->languages() as $lang):?>
                    <a href="<?= $page->url($lang->code()) ?>" class="block p-16 uppercase type-14 tracking-wide no-underline text-grey-dark hover:text-black effect <?php e($lang == $kirby->language(), ' hidden ') ?>"><?php e($lang->code() == 'en', 'eng', 'ελλ') ?></a>
                <?php endforeach; ?>
            </div>
            <?php snippet('sitemenu'); ?>
            <div class="logos flex flex-row items-center justify-center">
                <div class="w-1/2 pr-24 border-r border-solid border-grey flex flex-row justify-end">
                    <img src="<?= $site->ghermanikosmall()->toFile()->url() ?>" class="" />
                </div>
                <div class="w-1/2 pl-24 flex flex-row justify-start">
                    <img src="<?= $site->victoriasmall()->toFile()->url() ?>" class="" />
                </div>
            </div>
        </header>

        <main id="main" role="main" class="">
