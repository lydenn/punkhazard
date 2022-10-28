<?php

namespace Lydenn\Punkhazard\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lydenn\Punkhazard\Punkhazard
 */
class Punkhazard extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Lydenn\Punkhazard\Punkhazard::class;
    }
}
