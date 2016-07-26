<?php

use OldTimeGuitarGuy\Plaid\Contracts\Credentials;

class TestCredentials implements Credentials
{
    /**
     * Username associated with the user's financial institution.
     *
     * @return string
     */
    public function username()
    {
        return 'plaid_test';
    }

    /**
     * Password associated with the user's financial institution.
     *
     * @return string
     */
    public function password()
    {
        return 'plaid_good';
    }

    /**
     * Pin number required only for USAA accounts.
     *
     * @return integer|null
     */
    public function pin()
    {
        return 1234;
    }
}
