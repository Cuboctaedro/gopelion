<?php
if(!isset($layout)) { $layout = $data->layout(); }
if(!isset($text)) { $text = $data->text(); }
if(!isset($heading)) { $heading = $data->heading(); }
if(isset($morelink)) { $link = $morelink; } else { $link = false; }

?>

<div class="flex flex-row flex-wrap mb-72">
    <?php snippet('parts/textblock', ['text' => $text, 'heading' => $heading, 'layout' => $layout, 'link' => $link]) ?>
    <div class="w-full md:w-auto md:flex-1 <?php e($data->layout() == 'imagetext', ' md:order-1 '); ?>">
        <div class="slider-gallery">
            <ul class="list-reset landscape">
                <?php foreach($data->gallery()->toFiles() as $image): ?>
                    <li class="absolute pin w-full h-full">
                        <?php snippet('pictures/landscape-medium', ['image' => $image]) ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="controls flex flex-row items-center pt-8 float-right">
                <button class="prev text-24 px-8 leading-none link">&#10229;</button>
                <div>
                    <span class="slide-index text-14 leading-loose"></span><span class="total text-14 leading-loose"> / <?= $data->gallery()->toFiles()->count(); ?></span>
                </div>
                <button class="next text-24 px-8 leading-none link">&#10230;</button>
            </div>
        </div>
        <div class="hidden sm:block shadow-2 w-1/2 ml-24 -mt-72 md:ml-50 md:-mt-50 z-10 relative" >
            <?php snippet('pictures/small', ['image' => $data->image()->toFile()]) ?>
        </div>
    </div>
</div>
