<?php

use PHPUnit\Framework\TestCase;
use OldTimeGuitarGuy\Plaid\Plaid;
use GuzzleHttp\Client as GuzzleClient;
use OldTimeGuitarGuy\Plaid\Http\Request;

class ServiceTest extends TestCase
{
    private $plaid;
    private $credentials;
    private $user;

    /**
     * Get a singleton instance of Plaid
     *
     * @return \OldTimeGuitarGuy\Plaid\Plaid
     */
    protected function plaid()
    {
        if (isset($this->plaid)) {
            return $this->plaid;
        }

        $request = new Request(
            new GuzzleClient,
            'test_id',
            'test_secret',
            false
        );

        return $this->plaid = new Plaid($request);
    }

    /**
     * Get a singleton instance of test credentials
     *
     * @return \OldTimeGuitarGuy\Plaid\Contracts\Credentials
     */
    protected function credentials()
    {
        if (isset($this->credentials)) {
            $this->credentials;
        }

        return $this->credentials = new TestCredentials;
    }

    /**
     * Get a singleton instance of test user
     *
     * @return \OldTimeGuitarGuy\Plaid\Contracts\User
     */
    protected function user()
    {
        if (isset($this->user)) {
            return $this->user;
        }

        return $this->user = new TestUser;
    }
}
