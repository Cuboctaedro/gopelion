<picture>
    <source type="image/jpeg" media="(max-width: 480px)" srcset="<?= $image->thumb(['width'=> 480,'height'=> 320,'crop'=> true])->url(); ?>">
    <source type="image/jpeg" media="(max-width: 768px)" srcset="<?= $image->thumb(['width'=> 768,'height'=> 512,'crop' => true])->url(); ?>">
    <source type="image/jpeg" media="(max-width: 1300px)" srcset="<?= $image->thumb(['width'=> 1300,'height'=> 867,'crop' => true])->url(); ?>">
    <source type="image/jpeg" media="(min-width: 1301px)" srcset="<?= $image->thumb(['width'=> 900,'height'=> 600,'crop' => true])->url(); ?>">
    <img src="<?= $image->thumb(['width'=> 900,'height'=> 600,'crop' => true])->url(); ?>" class="block w-full lazyload">
</picture>
