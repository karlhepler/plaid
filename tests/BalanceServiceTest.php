<?php

use OldTimeGuitarGuy\Plaid\Contracts\Http\Response;

class BalanceServiceTest extends ServiceTest
{
    public function testGetBalance()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->balance()->get($this->user())
        );
    }
}
