<?php

namespace Branzia\Stripe\Database\Seeders;

use Illuminate\Database\Seeder;
use Branzia\Payment\Models\PaymentMethod;

class StripePaymentSeeder extends Seeder
{
    public function run(): void
    {
        $config = config('stripe');

        PaymentMethod::updateOrCreate(
            ['code' => $config['code']],
            [
                'title' => $config['title'],
                'is_active' => $config['enabled'],
                'config' => $config['config'],
            ]
        );
    }
}
