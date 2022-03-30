<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Braintree\Gateway;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(Gateway::class, function($app) {
            return new Gateway (
                [
                    'environment' => 'sandbox',
                    'merchantId' => 'g5rpstvxy6xgrq2m',
                    'publicKey' => 'vcvqz2qyr5msjjx9',
                    'privateKey' => 'bd4408e9b81e23518c43e7b3d4952458'
                ]
            );
        });
    }
}

