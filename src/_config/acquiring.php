<?php

return [
    'default_provider' => env('ACQUIRING_PROVIDER'),

    'url' => [
        'create_payment_url' => env('ACQUIRING_URL_CREATE_PAYMENT'),
        'get_payment_status_url' => env('ACQUIRING_URL_GET_PAYMENT_STATUS'),
    ],
];
