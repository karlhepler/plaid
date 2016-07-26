<?php

use OldTimeGuitarGuy\Plaid\Contracts\Http\Response;
use OldTimeGuitarGuy\Plaid\Exceptions\PlaidRequestException;

class PlaidExceptionResponseTest extends ServiceTest
{
    /**
     * @expectedException \OldTimeGuitarGuy\Plaid\Exceptions\PlaidRequestException
     */
    public function testBadRequestsThrowPlaidRequestException()
    {
        $this->plaid()->connect()->user()->add('does_not_exist', $this->credentials());
    }

    public function testPlaidRequestExceptionProvidesPlaidResponse()
    {
        try {
            $this->plaid()->connect()->user()->add('does_not_exist', $this->credentials());
        }
        catch (PlaidRequestException $e) {
            $this->assertInstanceOf(Response::class, $e->response());
        }
    }
}
