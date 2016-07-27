<?php

use OldTimeGuitarGuy\Plaid\Contracts\Http\Response;

class RiskServiceTest extends ServiceTest
{
    public function testAddUser()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->risk()->user()->add('wells', $this->credentials())
        );
    }

    public function testUserStep()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->risk()->user()->step($this->user('test_bofa'), 'tomato')
        );
    }

    public function testUpdateUser()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->risk()->user()->update($this->user(), $this->credentials())
        );
    }

    public function testDeleteUser()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->risk()->user()->delete($this->user())
        );
    }

    public function testGetData()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->risk()->get($this->user())
        );
    }
}
