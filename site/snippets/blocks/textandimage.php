<?php
if(!isset($layout)) { $layout = $data->layout(); }
if(!isset($image)) { $image = $data->image(); }
if(!isset($text)) { $text = $data->text(); }
if(!isset($heading)) { $heading = $data->heading(); }
if(isset($morelink)) { $link = $morelink; } else { $link = false; }

?>

<div class="flex flex-row flex-wrap mb-72">
    <?php snippet('parts/textblock', ['text' => $text, 'heading' => $heading, 'layout' => $layout, 'link' => $link]) ?>
    <div class="w-full md:w-auto md:flex-1 <?php e($layout == 'imagetext', ' md:order-1 '); ?>">
        <?php snippet('pictures/med', ['image' => $image->toFile()]) ?>
    </div>
</div>
