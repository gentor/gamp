<?php

namespace Gentor\Gamp\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Gentor\Gamp\GampService
 */
class Gamp extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'gamp';
    }
}
