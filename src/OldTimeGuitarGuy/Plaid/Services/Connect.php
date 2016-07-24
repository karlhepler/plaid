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
class Connect extends Base\Service
{
    /**
     * The base endpoint for all requests
     *
     * @var string
     */
    protected $endpoint = '/connect';

    /**
     * Add Connect user
     *
     * Test Credentials:
     * username = plaid_test
     * password = plaid_good
     * pin = 1234
     * 
     * https://plaid.com/docs/api/#add-connect-user
     *
     * @param  string $type     The institution code that you want to access.
     * @param  string $username Username associated with the user's financial institution.
     * @param  string $password Password associated with the user's financial institution.
     * @param  mixed  $pin      Pin number associated with the user's financial institution. (usaa only)
     * @param  array  $options
     * 
     * @return \OldTimeGuitarGuy\Plaid\Contracts\Http\Response
     */
    public function addUser($type, $username, $password, $pin = null, $options = [])
    {
        // Allow pin to optionally be set as options
        if ( is_array($pin) ) {
            $options = $pin;
            $pin = null;
        }
        
        return $this->request->post($this->endpoint, get_defined_vars());
    }

    /**
     * Connect MFA
     *
     * https://plaid.com/docs/api/#connect-mfa
     *
     * @param  string $access_token The ACCESS_TOKEN returned when the user was added.
     * @param  string $mfa          The extra information needed in the format: {mfa:'xxxxx'}.
     * @param  array  $options
     * 
     * @return \OldTimeGuitarGuy\Plaid\Contracts\Http\Response
     */
    public function mfa($access_token, $mfa, $options = [])
    {
        return $this->request->post("{$this->endpoint}/step", get_defined_vars());
    }

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

    /**
     * Update Connect User
     *
     * https://plaid.com/docs/api/#update-connect-user
     *
     * @param  string $access_token The ACCESS_TOKEN of the user you wish to update.
     * @param  string $username     Username associated with the user's financial institution.
     * @param  string $password     Password associated with the user's financial institution.
     * @param  mixed  $pin          Pin number associated with the user's financial institution. (usaa only)
     * 
     * @return \OldTimeGuitarGuy\Plaid\Contracts\Http\Response
     */
    public function updateUser($access_token, $username, $password, $pin = null)
    {
        return $this->request->patch($this->endpoint, get_defined_vars());
    }

    /**
     * Delete Connect User
     *
     * https://plaid.com/docs/api/#delete-connect-user
     *
     * @param  string $access_token The ACCESS_TOKEN that you wish to be removed from your account.
     * 
     * @return \OldTimeGuitarGuy\Plaid\Contracts\Http\Response
     */
    public function deleteUser($access_token)
    {
        return $this->request->delete($this->endpoint, compact('access_token'));
    }
}
