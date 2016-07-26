<?php

namespace OldTimeGuitarGuy\Plaid\Services;

/**
 * The Income endpoint allows you to retrieve various
 * information pertaining to a user's income. In addition
 * to the annual income, detailed information will be
 * provided for each contributing income stream (or job).
 *
 * https://plaid.com/docs/api/#income
 */
class Income extends Base\UserService
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
        return '/income/'.ltrim($path, '/');
    }
}
