<?php
$items = $pages->listed();
if($items->isNotEmpty()):
?>
<nav>
    <ul>
    <?php foreach($items as $item): ?>
        <li>
            <a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>">
                <?= $item->title()->html() ?>
            </a>
            <?php if($item->hasListedChildren()):?>
                <ul class="dropdown">
                    <?php foreach($item->children()->listed() as $subitem): ?>
                        <li>
                            <a<?php e($subitem->isOpen(), ' class="active"') ?> href="<?= $subitem->url() ?>">
                                <?= $subitem->title()->html() ?>
                            </a>
                        </li>
                    <?php endforeach ?>
                </ul>
            <?php endif; ?>
        </li>
    <?php endforeach ?>
    </ul>
</nav>
<?php endif ?>
