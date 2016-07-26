<?php

namespace OldTimeGuitarGuy\Plaid\Contracts;

/**
 * The Plaid User required to submit UserService requests.
 */
interface User
{
    /**
     * The ACCESS_TOKEN of the user 
     *
     * @return string
     */
    public function accessToken();
}
