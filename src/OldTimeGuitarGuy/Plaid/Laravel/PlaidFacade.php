<?php

namespace OldTimeGuitarGuy\Plaid\Laravel;

use OldTimeGuitarGuy\Plaid\Plaid;
use Illuminate\Support\Facades\Facade;

/**
 * @see \OldTimeGuitarGuy\Plaid\Plaid
 */
class PlaidFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Plaid::class;
    }
}
