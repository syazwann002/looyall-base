<?php

namespace Looyall\Looyall\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Looyall\Looyall\Looyall
 */
class Looyall extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Looyall\Looyall\Looyall::class;
    }
}
