<?php

namespace OldTimeGuitarGuy\Plaid\Services;

/**
 * The /auth endpoint allows you to collect a user's bank account and
 * routing number, along with basic account data and balances. The
 * product performs two crucial functions—it translates bank access
 * credentials (username & password) into an accurate account and
 * routing number. No input of account or routing number is necessary.
 * Secondly it validates that this is the owner of this account number,
 * in a NACHA compliant manner. No need for micro-deposits or any other
 * secondary authentication.
 *
 * https://plaid.com/docs/api/#auth
 */
class Auth extends Base\UserService
{
    /**
     * Get the main endpoint for this service
     *
     * @param  string|null $path
     * 
     * @return string
     */
    protected function endpoint($path = null)
    {
        return $this->path('auth', $path);
    }
}
