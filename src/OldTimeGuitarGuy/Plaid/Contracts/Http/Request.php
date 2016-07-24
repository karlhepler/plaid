<?php

namespace OldTimeGuitarGuy\Plaid\Contracts\Http;

interface Request
{
    const DEVELOPMENT_URI = 'https://tartan.plaid.com/';
    const PRODUCTION_URI  = 'https://api.plaid.com/';

    /**
     * Make a post request to Plaid
     *
     * @param  string $endpoint
     * @param  array  $parameters
     * 
     * @return \OldTimeGuitarGuy\Plaid\Contracts\Http\Response
     */
    public function post($endpoint, array $parameters = []);

    /**
     * Make a patch request to Plaid
     *
     * @param  string $endpoint
     * @param  array  $parameters
     * 
     * @return \OldTimeGuitarGuy\Plaid\Contracts\Http\Response
     */
    public function patch($endpoint, array $parameters = []);

    /**
     * Make a delete request to Plaid
     *
     * @param  string $endpoint
     * @param  array  $parameters
     * 
     * @return \OldTimeGuitarGuy\Plaid\Contracts\Http\Response
     */
    public function delete($endpoint, array $parameters = []);

    /**
     * Make a get request to Plaid
     *
     * @param  string $endpoint
     * @param  array  $parameters
     * 
     * @return \OldTimeGuitarGuy\Plaid\Contracts\Http\Response
     */
    public function get($endpoint, array $parameters = []);
}
