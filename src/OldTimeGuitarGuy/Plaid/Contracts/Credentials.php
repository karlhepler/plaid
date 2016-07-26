<?php

namespace OldTimeGuitarGuy\Plaid\Contracts;

/**
 * The Plaid credentials necessary for
 * adding, updating, & deleting Users.
 */
interface Credentials
{
    /**
     * Username associated with the user's financial institution.
     *
     * @return string
     */
    public function username();

    /**
     * Password associated with the user's financial institution.
     *
     * @return string
     */
    public function password();

    /**
     * Pin number required only for USAA accounts.
     *
     * @return integer|null
     */
    public function pin();
}
