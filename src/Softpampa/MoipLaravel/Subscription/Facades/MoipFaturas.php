<?php

namespace Softpampa\MoipLaravel\Subscription\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class MoipFaturas.
 */
class MoipFaturas extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'moip-invoices';
    }
}
