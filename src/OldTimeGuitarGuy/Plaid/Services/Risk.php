<?php

namespace OldTimeGuitarGuy\Plaid\Services;

use OldTimeGuitarGuy\Plaid\Contracts\ManagesUser;
use OldTimeGuitarGuy\Plaid\Traits\UserManagement;

class Risk extends Base\Service implements ManagesUser
{
    use UserManagement;

    /**
     * The base endpoint for all requests
     *
     * @var string
     */
    protected $endpoint = '/risk';
}
