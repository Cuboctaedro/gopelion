<?php

return function ($page) {


    $rooms = $page->children()->listed()->filterBy('template', 'room');
    $prices = $page->children()->listed()->filterBy('template', 'pricing')->first();
    $subpages = $page->children()->listed()->filterBy('template', 'default');


    return [
        'rooms' => $rooms,
        'prices' => $prices,
        'subpages' => $subpages,
    ];

};
