<?php

namespace OldTimeGuitarGuy\Plaid\Services\Base;

/**
 * The granddaddy of all services.
 */
abstract class Endpoint
{
    /**
     * Get the main endpoint for this service
     *
     * @param  string|null $path
     * 
     * @return string
     */
    abstract protected function endpoint($path = null);

    ///////////////////////
    // PROTECTED METHODS //
    ///////////////////////

    /**
     * Return a properly-formed path
     *
     * @param  string $base
     * @param  string|null $path
     *
     * @return string
     */
    protected function path($base, $path = null)
    {
        $base = '/'.trim($base, '/');

        if ( is_null($path) ) {
            return $base;
        }

        return $base.'/'.trim($path, '/');
    }
}
