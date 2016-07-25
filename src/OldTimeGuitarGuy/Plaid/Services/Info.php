<?php

namespace OldTimeGuitarGuy\Plaid\Services;

use OldTimeGuitarGuy\Plaid\Contracts\ManagesUser;
use OldTimeGuitarGuy\Plaid\Traits\UserManagement;

/**
 * The Info endpoint allows you to retrieve various
 * account holder information on file with the
 * financial institution, including names, emails,
 * phone numbers, and addresses.
 *
 * https://plaid.com/docs/api/#info
 */
class Info extends Base\Service implements ManagesUser
{
    use UserManagement;

    /**
     * The base endpoint for all requests
     *
     * @var string
     */
    protected $endpoint = '/info';
}
