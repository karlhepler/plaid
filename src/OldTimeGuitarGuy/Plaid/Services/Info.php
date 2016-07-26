<?php

namespace OldTimeGuitarGuy\Plaid\Services;

/**
 * The Info endpoint allows you to retrieve various
 * account holder information on file with the
 * financial institution, including names, emails,
 * phone numbers, and addresses.
 *
 * https://plaid.com/docs/api/#info
 */
class Info extends Base\UserService
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
        return '/info/'.ltrim($path, '/');
    }
}
