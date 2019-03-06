<picture>
    <?php if($image->width() > $image->height()): ?>
        <source type="image/jpeg" media="(max-width: 480px)" srcset="<?= $image->thumb(['width'=> 320,'height'=> 240,'crop'=> true])->url(); ?>">
        <source type="image/jpeg" media="(max-width: 768px)" srcset="<?= $image->thumb(['width'=> 384,'height'=> 256,'crop' => true])->url(); ?>">
        <source type="image/jpeg" media="(max-width: 1300px)" srcset="<?= $image->thumb(['width'=> 650,'height'=> 433,'crop' => true])->url(); ?>">
        <source type="image/jpeg" media="(min-width: 1301px)" srcset="<?= $image->thumb(['width'=> 450,'height'=> 300,'crop' => true])->url(); ?>">
        <img src="<?= $image->thumb(['width'=> 650,'height'=> 433,'crop' => true])->url(); ?>" class="block w-full lazyload">
    <?php else: ?>
        <source type="image/jpeg" media="(max-width: 480px)" srcset="<?= $image->thumb(['width'=> 320,'height'=> 480,'crop'=> true])->url(); ?>">
        <source type="image/jpeg" media="(max-width: 768px)" srcset="<?= $image->thumb(['width'=> 384,'height'=> 576,'crop' => true])->url(); ?>">
        <source type="image/jpeg" media="(max-width: 1300px)" srcset="<?= $image->thumb(['width'=> 650,'height'=> 975,'crop' => true])->url(); ?>">
        <source type="image/jpeg" media="(min-width: 1301px)" srcset="<?= $image->thumb(['width'=> 450,'height'=> 675,'crop' => true])->url(); ?>">
        <img src="<?= $image->thumb(['width'=> 450,'height'=> 675,'crop' => true])->url(); ?>" class="block w-full lazyload">
    <?php endif; ?>
</picture>
