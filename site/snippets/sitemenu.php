<?php
$items = $pages->listed();
if($items->isNotEmpty()):
?>
<nav class="menu flex flex-row">
    <button class="menu-button flex flex-row items-center p-16 uppercase type-14 tracking-wide no-underline text-grey-dark hover:text-black effect" data-toggle-menu="#menu">
        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
        <span class="pl-16">Menu</span>
    </button>
    <div id="menu" class="menu-wrapper">
        <div class="close-buttom-wrap w-full justify-end mb-32">
            <button class="close-button text-white h-32 w-32" data-toggle-target="#menu"><svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/><path d="M0 0h24v24H0z" fill="none"/></svg></button>
        </div>
        <ul class="menu-list list-reset py-16">
        <?php foreach($items as $item): ?>
            <?php if($item->hasListedChildren()):?>
                <li class="has-dropdown-button z-0">
                    <span class="flex flex-row menulink">
                        <a class=" uppercase type-14 tracking-wide no-underline text-grey-dark hover:text-black effect <?php e($item->isOpen(), ' text-purple ') ?> block " href="<?= $item->url() ?>">
                            <?= $item->title()->html() ?>
                        </a>
                        <button class="dropdown-button" data-toggle-target="#submenu-<?= $item->slug() ?>"><svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/><path d="M0 0h24v24H0z" fill="none"/></svg></button>
                    </span>
                    <ul class="dropdown list-reset" id="submenu-<?= $item->slug() ?>">
                        <?php foreach($item->children()->listed() as $subitem): ?>
                            <li>
                                <a<?php e($subitem->isOpen(), ' class="active"') ?> href="<?= $subitem->url() ?>">
                                    <?= $subitem->title()->html() ?>
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </li>
            <?php else: ?>
                <li>
                    <a class="menulink uppercase type-14 tracking-wide no-underline text-grey-dark hover:text-black effect <?php e($item->isOpen(), ' text-purple ') ?> block " href="<?= $item->url() ?>">
                        <?= $item->title()->html() ?>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach ?>
        </ul>
    </div>
</nav>
<?php endif ?>
