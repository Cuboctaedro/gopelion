<?php

Kirby::plugin('objecteam/filemethods', [
    'fileMethods' => [
        'customsize' => function ($w, $h) {
            return $this->thumb(['width'=> $w,'height'=> $h,'crop'=> true])->url();
        }
    ]
]);
