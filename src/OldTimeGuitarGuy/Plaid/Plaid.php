<?php

namespace OldTimeGuitarGuy\Plaid;

/**
 * The main entry point for the Plaid API Client
 *
 * https://plaid.com/docs/api/
 */
class Plaid
{
    /**
     * The available Plaid services
     *
     * @var array
     */
    protected $services = [
        'connect' => Services\Connect::class,
        // 'auth' => Services\Auth::class,
        // 'info' => Services\Info::class,
        // 'income' => Services\Income::class,
        // 'risk' => Services\Risk::class,
        // 'balance' => Services\Balance::class,
        // 'upgrade' => Services\Upgrade::class,
        // 'institutions' => Services\Institutions::class,
        // 'categories' => Services\Categories::class,
    ];

    /**
     * Plaid services instance cache
     *
     * @var array
     */
    protected $instances = [];

    /**
     * The Plaid request object
     *
     * @var Contracts\Http\Request
     */
    protected $request;

    /**
     * Create a new instance of Plaid
     *
     * @param Contracts\Http\Request $request
     */
    public function __construct(Contracts\Http\Request $request)
    {
        $this->request = $request;
    }

    /**
     * Return an instance of the given service
     *
     * @param  string $service
     * 
     * @return mixed
     */
    public function make($service)
    {
        // If we already have an instance, then just return it
        if ( isset($this->instances[$service]) ) {
            return $this->instances[$service];
        }

        // Otherwise, create it, save it, & return it
        return $this->instances[$service] = new $this->services[$service]($this->request);
    }

    /**
     * Dynamically call a plaid service
     *
     * @param  string $method
     * @param  array  $arguments
     * 
     * @return mixed
     * @throws \BadMethodCallException
     */
    public function __call($method, array $arguments)
    {
        try {
            return $this->make($method);
        }
        catch (\Exception $e) {
            throw new \BadMethodCallException("{$method} is an invalid Plaid service.");
        }
    }

    /**
     * Allow accessing services as properties
     *
     * @param  string $name
     * 
     * @return mixed
     */
    public function __get($name)
    {
        return $this->{$name}();
    }
}
