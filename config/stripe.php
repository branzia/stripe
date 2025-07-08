<?php

return [
    'code' => 'stripe',
    'title' => 'Stripe',
    'enabled' => false,
    'config' => [
        'public_key' => env('STRIPE_PUBLIC_KEY', ''),
        'secret_key' => env('STRIPE_SECRET_KEY', ''),
        'sandbox' => true,
    ],
];
