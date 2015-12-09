<?php

namespace Softpampa\MoipLaravel\Subscription;

use Illuminate\Support\ServiceProvider;
use Softpampa\Moip\Subscription\Api;
use Softpampa\Moip\Subscription\MoipClient;

/**
 * Class SubscriptionServiceProvider.
 */
class SubscriptionServiceProviderLaravel4 extends ServiceProvider
{
    /**
     *
     */
    public function register()
    {
        // $this->package('Softpampa/moip-assinaturas-laravel', 'moip-assinaturas', __DIR__.'/../../../');
        $this->package('Softpampa/moip-assinaturas-laravel');

        \Log::info('pacakge moip-assinaturas', ['config' => $this->app['config']->get('moip-assinaturas-laravel')]);
    }

    /**
     *
     */
    public function boot()
    {
        $this->app->singleton('moip-client', function () {
            return new MoipClient(
                \Config::get('moip-assinaturas-laravel::api_token'),
                \Config::get('moip-assinaturas-laravel::api_key'),
                \Config::get('moip-assinaturas-laravel::environment', 'api')
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
    }
}
