<?php

namespace OldTimeGuitarGuy\Plaid\Services\Base;

use OldTimeGuitarGuy\Plaid\Contracts\Http\Request;

abstract class Service
{
    /**
     * The Plaid request object
     *
     * @var \OldTimeGuitarGuy\Plaid\Contracts\Http\Request
     */
    protected $request;

    /**
     * Create a new instance of this Plaid service
     *
     * @param \OldTimeGuitarGuy\Plaid\Contracts\Http\Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}
