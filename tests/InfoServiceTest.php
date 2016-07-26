<?php

use OldTimeGuitarGuy\Plaid\Contracts\Http\Response;

class InfoServiceTest extends ServiceTest
{
    public function testAddUser()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->info()->user()->add('wells', $this->credentials())
        );
    }

    public function testUserMfa()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->info()->user()->mfa($this->user('test_bofa'), 'tomato')
        );
    }

    public function testUpdateUser()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->info()->user()->update($this->user(), $this->credentials())
        );
    }

    public function testDeleteUser()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->info()->user()->delete($this->user())
        );
    }

    public function testUpgradeUser()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->info()->user()->upgrade($this->user(), 'income')
        );
    }

    public function testGetData()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->info()->get($this->user())
        );
    }
}
