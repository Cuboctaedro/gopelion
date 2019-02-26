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
        <link rel="alternate" hreflang="<?= $lang->code(); ?>" href="<?= $page->url($lang->code()) ?>" />
    <?php endforeach; ?>

    <script type="text/javascript">
        (function() {
            var trial = document.createElement('script');
            trial.type = 'text/javascript';
            trial.async = true;
            trial.src = 'https://easy.myfonts.net/v2/js?sid=281221(font-family=Cera+PRO+Light)&sid=281223(font-family=Cera+PRO+Bold)&sid=281225(font-family=Cera+PRO+Medium)&sid=281227(font-family=Cera+PRO+Regular)&key=5njI10mmWf';
            var head = document.getElementsByTagName("head")[0];
            head.appendChild(trial);
        })();
    </script>
    <?= mix('/app.css') ?>
    </head>

    <body class="leading-normal font-sans text-grey-dark">
        <a class="skip-link" href="#main">Skip to content</a>
        <header class="header flex flex-row" >
            <div class="wrapper">
                <h1 class="hdr-logo" role="banner">
                    <a class="hdr-logo-link" href="<?= $site->url() ?>" rel="home"><?= $site->title() ?></a>
                </h1>
                <?php snippet('sitemenu'); ?>
            </div>
        </header>

        <main id="main" role="main" class="">
