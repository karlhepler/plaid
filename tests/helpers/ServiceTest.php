<?php

use PHPUnit\Framework\TestCase;
use OldTimeGuitarGuy\Plaid\Plaid;
use GuzzleHttp\Client as GuzzleClient;
use OldTimeGuitarGuy\Plaid\Http\Request;

class ServiceTest extends TestCase
{
    private static $plaid;
    private static $credentials;
    private static $user;

    /**
     * Get a singleton instance of Plaid
     *
     * @return \OldTimeGuitarGuy\Plaid\Plaid
     */
    protected function plaid()
    {
        if (isset(self::$plaid)) {
            return self::$plaid;
        }

        $request = new Request(
            new GuzzleClient,
            'test_id',
            'test_secret',
            false
        );

        return self::$plaid = new Plaid($request);
    }

    /**
     * Get a singleton instance of test credentials
     *
     * @return \OldTimeGuitarGuy\Plaid\Contracts\Credentials
     */
    protected function credentials()
    {
        if (isset(self::$credentials)) {
            self::$credentials;
        }

        return self::$credentials = new TestCredentials;
    }

    /**
     * Get a singleton instance of test user
     *
     * @param  string|null $accessToken
     * @return \OldTimeGuitarGuy\Plaid\Contracts\User
     */
    protected function user($accessToken = null)
    {
        if ( !is_null($accessToken) && $accessToken !== 'test_wells' ) {
            return new TestUser($accessToken);
        }

        if (isset(self::$user)) {
            return self::$user;
        }

        return self::$user = new TestUser('test_wells');
    }
}
