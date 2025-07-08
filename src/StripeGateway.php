<?php

namespace Branzia\Stripe;

use Branzia\Payment\Contracts\PaymentGatewayInterface;

class StripeGateway implements PaymentGatewayInterface
{
    protected array $config = [];

    public function setConfig(array $config): void
    {
        $this->config = $config;
    }

    public function process(array $payload): array
    {
        return [
            'status' => 'success',
            'transaction_id' => 'stripe_txn_' . rand(1000, 9999),
        ];
    }
}
