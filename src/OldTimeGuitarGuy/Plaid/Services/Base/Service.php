<?php

namespace OldTimeGuitarGuy\Plaid\Services\Base;

use OldTimeGuitarGuy\Plaid\Contracts\Http\Request;

/**
 * An abstract parent for all Plaid services.
 * https://plaid.com/docs/api
 */
abstract class Service extends Endpoint
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
