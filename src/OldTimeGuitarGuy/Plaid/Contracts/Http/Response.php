<?php

namespace OldTimeGuitarGuy\Plaid\Contracts\Http;

interface Response
{
    /**
     * Get the status code
     *
     * @return integer
     */
    public function status();

    /**
     * If the method referenced is the name of
     * a top-level array in the contents, then
     * allow a callable to be passed that will
     * return each result of an loop iteration
     *
     * @param  string $method
     * @param  array  $arguments
     *
     * @return void
     *
     * @throws \BadMethodCallException
     */
    public function __call($method, array $arguments);

    /**
     * Directly reference the content json
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
