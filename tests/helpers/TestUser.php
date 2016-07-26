<?php

use OldTimeGuitarGuy\Plaid\Contracts\User;

class TestUser implements User
{
    protected $accessToken;

    public function __construct($accessToken)
    {
        $this->accessToken = $accessToken;
    }

    /**
     * The ACCESS_TOKEN of the user 
     *
     * @return string
     */
    public function accessToken()
    {
        return $this->accessToken;
    }
}
