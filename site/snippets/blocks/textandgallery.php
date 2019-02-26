<div class="flex flex-row flex-wrap mb-72">
    <div class="w-full md:w-1/2 <?php e($data->layout() == 'imagetext', ' md:order-2 '); ?>" >
        <h2 class="subheading px-8 sm:px-16 md:text-left md:px-64" <?php e($data->layout() == 'imagetext', ' data-aos="fade-left" ', ' data-aos="fade-right" '); ?>><?= $data->heading() ?></h2>
        <hr class="mb-32 block h-0 border-b border-black border-solid mx-auto md:mx-64 w-240" />
        <?php snippet('parts/moreless', ['text'=> $data->text()]) ?>
    </div>
    <div class="w-full md:w-1/2 relative h-auto slider-wrapper <?php e($data->layout() == 'imagetext', ' md:order-1 '); ?>">
        <div class="slider-gallery ">
            <ul class="list-reset siema">
                <?php foreach($data->gallery()->toFiles() as $image): ?>
                    <li class="slide">
                        <?php snippet('pictures/med', ['image' => $image]) ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="controls flex flex-row items-center justify-center sm:justify-start pt-8">
                <button class="prev text-24 px-8 leading-none text-grey-dark">&#10229;</button>
                <div>
                    <span class="slide-index text-14 leading-loose"></span><span class="total text-14 leading-loose"> / <?= $data->gallery()->toFiles()->count(); ?></span>
                </div>
                <button class="next text-24 px-8 leading-none text-grey-dark">&#10230;</button>
            </div>
        </div>
        <div class="slider-picture shadow-2 w-1/2 ml-72" >
            <?php snippet('pictures/med', ['image' => $data->image()->toFile()]) ?>
        </div>
    </div>
</div>
