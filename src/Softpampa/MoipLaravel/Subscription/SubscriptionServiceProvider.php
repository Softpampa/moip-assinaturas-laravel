<?php

namespace Softpampa\MoipLaravel\Subscription;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Softpampa\Moip\Subscription\Api;
use Softpampa\Moip\Subscription\MoipClient;

/**
 * Class SubscriptionServiceProvider.
 */
class SubscriptionServiceProvider extends BaseServiceProvider
{
    /**
     *
     */
    public function register()
    {
    }

    /**
     *
     */
    public function boot()
    {
        $this->app->singleton('moip-client', function () {
            return new MoipClient(
                config('moip-assinaturas-laravel::api_token'),
                config('moip-assinaturas-laravel::api_key'),
                config('moip-assinaturas-laravel::environment', 'api')
            );
        });

        $this->app->singleton('moip-api', function () {
            return new Api(app('moip-client'));
        });

        $this->app->bind('moip-plans', function () {
            return app('moip-api')->plans();
        });

        $this->app->bind('moip-subscriptions', function () {
            return app('moip-api')->subscriptions();
        });

        $this->app->bind('moip-customers', function () {
            return app('moip-api')->customers();
        });

        $this->app->bind('moip-invoices', function () {
            return app('moip-api')->invoices();
        });

        $this->app->bind('moip-preferences', function () {
            return app('moip-api')->preferences();
        });

        $this->app->bind('moip-payments', function () {
            return app('moip-api')->payments();
        });

        $this->publishes([
            __DIR__.'/../../../config/config.php' => config_path('moip-assinaturas.php'),
        ]);
    }
}
