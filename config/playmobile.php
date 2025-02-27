<?php

return [
    'provider' => [
        'endpoint' => env('PLAYMOBILE_API_URL', 'https://pay.playmobile.uz/api'),
        'playmobile' => [
            'username' => env('PLAYMOBILE_USERNAME', '1212'),
            'password' => env('PLAYMOBILE_PASSWORD', '1212'),
        ]
    ]
];
