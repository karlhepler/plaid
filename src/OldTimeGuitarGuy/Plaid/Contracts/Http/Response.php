<?php

namespace OldTimeGuitarGuy\Plaid\Contracts\Http;

interface Response
{
    /**
     * Get the status code
     *
     * @return integer
     */
    public function statusCode();
    
    /**
     * Dynamically reference the initial layer of the content
     *
     * @param  string $method
     * @param  array  $arguments
     * @return \stdClass
     */
    public function __call($method, array $arguments);

    /**
     * Reference methods as properties
     *
     * @param  string $value
     * @return mixed
     */
    public function __get($value);

    /**
     * The string representation of the response
     *
     * @return string
     */
    public function __toString();
}
