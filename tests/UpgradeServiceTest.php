<?php

use OldTimeGuitarGuy\Plaid\Contracts\Http\Response;

class UpgradeServiceTest extends ServiceTest
{
    public function testTo()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->upgrade()->to($this->user(), 'risk')
        );
    }
}
