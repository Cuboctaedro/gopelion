<?php

return function ($page) {


    $hotel = $page->parent();
    $pricespage = $page->parent()->children()->listed()->filterBy('template', 'pricing')->first();


    return [
        'hotel' => $hotel,
        'pricespage' => $pricespage,
    ];

};
