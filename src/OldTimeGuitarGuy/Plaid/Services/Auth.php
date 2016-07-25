<?php

namespace OldTimeGuitarGuy\Plaid\Services;

use OldTimeGuitarGuy\Plaid\Contracts\ManagesUser;
use OldTimeGuitarGuy\Plaid\Traits\UserManagement;

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
class Auth extends Base\Service implements ManagesUser
{
    use UserManagement;

    /**
     * The base endpoint for all requests
     *
     * @var string
     */
    protected $endpoint = '/auth';

    /**
     * Get Auth Data
     *
     * @param  string $access_token
     *
     * @return \OldTimeGuitarGuy\Plaid\Contracts\Http\Response
     */
    public function getData($access_token)
    {
        return $this->request->post("{$this->endpoint}/get", compact('access_token'));
    }
}
