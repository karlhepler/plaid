<?php

use OldTimeGuitarGuy\Plaid\Contracts\Http\Response;

class AuthServiceTest extends ServiceTest
{
    public function testAddUser()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->auth()->user()->add('wells', $this->credentials())
        );
    }

    public function testUserStep()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->auth()->user()->step($this->user('test_bofa'), 'tomato')
        );
    }

    public function testUpdateUser()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->auth()->user()->update($this->user(), $this->credentials())
        );
    }

    public function testDeleteUser()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->auth()->user()->delete($this->user())
        );
    }

    public function testGetData()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->auth()->get($this->user())
        );
    }
}
