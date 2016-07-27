<?php

use OldTimeGuitarGuy\Plaid\Contracts\Http\Response;

class IncomeServiceTest extends ServiceTest
{
    public function testAddUser()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->income()->user()->add('wells', $this->credentials())
        );
    }

    public function testUserStep()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->income()->user()->step($this->user('test_bofa'), 'tomato')
        );
    }

    public function testUpdateUser()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->income()->user()->update($this->user(), $this->credentials())
        );
    }

    public function testDeleteUser()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->income()->user()->delete($this->user())
        );
    }

    public function testGetData()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->income()->get($this->user())
        );
    }
}
