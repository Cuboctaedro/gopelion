<?php

use Uniform\Form;

return function ($kirby)
{
    $availability_form = new Form([
        'firstname' => [
            'rules' => ['required'],
            'message' => t('enter_firstname'),
        ],
        'lastname' => [
            'rules' => ['required'],
            'message' => t('enter_lastname'),
        ],
        'email' => [
            'rules' => ['required', 'email'],
            'message' => t('enter_email'),
        ],
        'arrival' => [
            'rules' => ['required'],
            'message' => t('enter_arrival'),
        ],
        'departure' => [
            'rules' => ['required'],
            'message' => t('enter_departure'),
        ],
        'rooms' => [
            'rules' => ['required'],
            'message' => t('enter_rooms'),
        ],
        'people' => [
            'rules' => ['required'],
            'message' => t('enter_people'),
        ],
        'message' => [
            'rules' => [],
            'message' => '',
        ],
    ]);

    if ($kirby->request()->is('POST')) {
        $availability_form->honeypotGuard()
            ->emailAction([
            'to' => 'info@cuboctaedro.eu',
            'from' => 'info@cuboctaedro.eu',
        ]);
    }

    return compact('availability_form');
};
