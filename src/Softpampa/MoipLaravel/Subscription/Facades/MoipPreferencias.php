<?php

namespace Softpampa\MoipLaravel\Subscription\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class MoipPreferencias.
 */
class MoipPreferencias extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'moip-preferences';
    }
}
