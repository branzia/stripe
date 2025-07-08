<?php

namespace Branzia\Stripe\Providers;

use Branzia\Payment\Payment;
use Branzia\Stripe\StripeGateway;
use Illuminate\Support\ServiceProvider;
use Branzia\Payment\Models\PaymentMethod;
use Branzia\Blueprint\BranziaServiceProvider;

class StripeServiceProvider extends BranziaServiceProvider
{
    public function moduleName(): string
    {
        return 'Stripe';
    }
    public function moduleRootPath():string{
        return dirname(__DIR__);
    }
    public function register(): void
    {
        parent::register();
    }

    public function boot(): void
    {
        parent::boot();
        Payment::registerGateway('stripe', StripeGateway::class);
    }


}
