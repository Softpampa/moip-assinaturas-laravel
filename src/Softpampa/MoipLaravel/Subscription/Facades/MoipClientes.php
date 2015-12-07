<?php

namespace Softpampa\MoipLaravel\Subscription\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class MoipClientes.
 */
class MoipClientes extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'moip-customers';
    }
}
