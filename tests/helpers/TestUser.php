<?php

use OldTimeGuitarGuy\Plaid\Contracts\User;

class TestUser implements User
{
    /**
     * The ACCESS_TOKEN of the user 
     *
     * @return string
     */
    public function accessToken()
    {
        return 'test_wells';
    }
}
