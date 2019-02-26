<div class="flex flex-row flex-wrap mb-72">
    <div class="w-full md:w-1/2 <?php e($data->layout() == 'imagetext', ' md:order-2 '); ?>" >
        <h2
            class="subheading px-8 sm:px-16 md:text-left md:px-64"
            data-aos="<?php e($data->layout() == 'imagetext', 'fade-left', 'fade-right'); ?>"
        ><?= $data->heading() ?></h2>
        <hr class="mb-32 block h-0 border-b border-black border-solid mx-auto md:mx-64 w-240" />
        <?php snippet('parts/moreless', ['text'=> $data->text()]) ?>
    </div>
    <div class="w-full md:w-1/2  <?php e($data->layout() == 'imagetext', ' md:order-1 '); ?>">
        <?php snippet('pictures/med', ['image' => $data->image()->toFile()]) ?>
    </div>
</div>
