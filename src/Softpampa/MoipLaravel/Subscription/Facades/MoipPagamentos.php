<?php

namespace Softpampa\MoipLaravel\Subscription\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class MoipPagamentos.
 */
class MoipPagamentos extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'moip-payments';
    }
}
