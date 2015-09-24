<?php namespace Softpampa\MoipLaravel\Subscription\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class MoipAssinaturas
 * @package Softpampa\MoipLaravel\Subscription\Facades
 */
class MoipAssinaturas extends Facade {

    protected static function getFacadeAccessor() { return 'moip-subscriptions'; }

}