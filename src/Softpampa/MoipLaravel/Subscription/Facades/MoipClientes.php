<?php namespace Softpampa\MoipLaravel\Subscription\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class MoipClientes
 * @package Softpampa\MoipLaravel\Subscription\Facades
 */
class MoipClientes extends Facade {

    protected static function getFacadeAccessor() { return 'moip-customers'; }

}