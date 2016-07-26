<?php

use OldTimeGuitarGuy\Plaid\Contracts\Http\Response;

class InstitutionsServiceTest extends ServiceTest
{
    public function testGetAllInstitutions()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->institutions()->get()
        );
    }

    public function testGetInstitutionByType()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->institutions()->get('wells')
        );
    }

    public function testGetInstitutionById()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->institutions()->get('5301aa096b3f822b440001cb')
        );
    }

    public function testSearchInstitutions()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->institutions()->search('wells')
        );
    }

    public function testSearchInstitutionsById()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->institutions()->searchById('5301aa096b3f822b440001cb')
        );
    }

    public function testGetLongtailInstitutions()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->institutions()->longtail()
        );
    }
}
