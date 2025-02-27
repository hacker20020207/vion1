<?php

return [
    'provider' => [
        'endpoint' => env('CLICKUZ_API_URL', 'https://api.click.uz/v2/merchant/'),
        'click' => [
            'merchant_id' => env('CLICKUZ_MERCHANT_ID', 1111),
            'service_id' => env('CLICKUZ_SERVICE_ID', 2222),
            'user_id' => env('CLICKUZ_MERCHANT_USER_ID', 3333),
            'secret_key' => env('CLICKUZ_SECRET_KEY', 'secret_key'),
        ]
    ]
];
