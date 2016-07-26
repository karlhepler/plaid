<?php

namespace OldTimeGuitarGuy\Plaid\Services;

/**
 * The /connect endpoint allows developers to receive user-authorized
 * transaction and account data. Data is contained in a set of transaction
 * and account objects, one for each respective entry. Transaction data
 * is standardized across financial institutions, and in most cases
 * transactions are linked to a clean name, entity type, location, and
 * category. Similarly, account data is standardized and returned with
 * a clean name, number, balance, and other meta information where available.
 *
 * https://plaid.com/docs/api/#connect
 */
class Connect extends Base\UserService
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
        return $this->path('connect', $path);
    }
}
