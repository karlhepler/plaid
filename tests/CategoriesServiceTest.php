<?php

use OldTimeGuitarGuy\Plaid\Contracts\Http\Response;

class CategoriesServiceTest extends ServiceTest
{
    public function testGetAllCategories()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->categories()->get()
        );
    }

    public function testGetCategoryById()
    {
        $this->assertInstanceOf(
            Response::class,
            $this->plaid()->categories()->get(10000000)
        );
    }
}
