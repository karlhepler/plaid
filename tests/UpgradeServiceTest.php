<?php

use OldTimeGuitarGuy\Plaid\Contracts\Http\Response;

class UpgradeServiceTest extends ServiceTest
{
    public function testUpgradeUser()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->upgrade()->user($this->user(), 'risk')
        );
    }
}
