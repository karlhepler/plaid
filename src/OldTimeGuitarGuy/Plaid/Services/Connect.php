<?php

namespace OldTimeGuitarGuy\Plaid\Services;

use OldTimeGuitarGuy\Plaid\Contracts\ManagesUser;
use OldTimeGuitarGuy\Plaid\Traits\UserManagement;

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
class Connect extends Base\Service implements ManagesUser
{
    use UserManagement;
    
    /**
     * The base endpoint for all requests
     *
     * @var string
     */
    protected $endpoint = '/connect';

    /**
     * Get Transactions
     *
     * https://plaid.com/docs/api/#get-transactions
     *
     * @param  string $access_token The ACCESS_TOKEN returned when the user was added.
     * @param  array  $options
     * 
     * @return \OldTimeGuitarGuy\Plaid\Contracts\Http\Response
     */
    public function getTransactions($access_token, $options = [])
    {
        return $this->request->post("{$this->endpoint}/get", get_defined_vars());
    }
}
