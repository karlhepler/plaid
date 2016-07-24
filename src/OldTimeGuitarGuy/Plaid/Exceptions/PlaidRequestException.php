<?php

namespace OldTimeGuitarGuy\Plaid\Exceptions;

use OldTimeGuitarGuy\Plaid\Contracts\Http\Response;

class PlaidRequestException extends \Exception
{
    /**
     * The Plaid response that generated this exception
     *
     * @var \OldTimeGuitarGuy\Plaid\Contracts\Http\Response
     */
    protected $response;

    /**
     * Create a new instance of PlaidRequestException
     *
     * @param \OldTimeGuitarGuy\Plaid\Contracts\Http\Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        
        $this->response = $response;
    }

    /**
     * Get the Plaid response
     *
     * @return \OldTimeGuitarGuy\Plaid\Contracts\Http\Response
     */
    public function response()
    {
        return $this->response;
    }
}
