<?php namespace Softpampa\MoipLaravel\Subscription\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class MoipFaturas
 * @package Softpampa\MoipLaravel\Subscription\Facades
 */
class MoipFaturas extends Facade {

    protected static function getFacadeAccessor() { return 'moip-invoices'; }

}