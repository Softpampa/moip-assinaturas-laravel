<?php

namespace Softpampa\MoipLaravel\Subscription\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class MoipPlanos.
 */
class MoipPlanos extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'moip-plans';
    }
}
