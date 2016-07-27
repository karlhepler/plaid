<?php

namespace OldTimeGuitarGuy\Plaid\Http;

use Psr\Http\Message\ResponseInterface;
use OldTimeGuitarGuy\Plaid\Contracts\Http\Response as ResponseContract;

class Response implements ResponseContract
{
    /**
     * The response status code
     *
     * @var integer
     */
    protected $status;

    /**
     * The response content
     *
     * @var \stdClass
     */
    protected $content;

    /**
     * Create a new instance of Plaid Response
     *
     * @param \Psr\Http\Message\ResponseInterface $response
     */
    public function __construct(ResponseInterface $response)
    {
        $this->status = $response->getStatusCode();
        $this->content = json_decode($response->getBody()->getContents());
    }

    /**
     * Get the status code
     *
     * @return integer
     */
    public function status()
    {
        return $this->status;
    }

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
    public function __call($method, array $arguments)
    {
        if (! $this->isTopLevelArray($method) ) {
            throw new \BadMethodCallException("{$method} is an invalid response method.");
        }

        if ( $this->hasCallable($arguments) ) {
            foreach ($this->content->{$method} as $value) {
                $arguments[0]($value);
            }
        }
    }

    /**
     * Directly reference the content json
     *
     * @param  string $value
     * 
     * @return mixed
     */
    public function __get($value)
    {
        return $this->content->{$value};
    }

    /**
     * The string representation of the response
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode($this->content);
    }

    ///////////////////////
    // PROTECTED METHODS //
    ///////////////////////

    /**
     * Determine if the given property
     * is a top-level array in $this->content
     *
     * @param  string  $property
     *
     * @return boolean
     */
    protected function isTopLevelArray($property)
    {
        return isset($this->content->{$property})
            && is_array($this->content->{$property});
    }

    /**
     * Determine if the first index of the arguments
     * is an instance of callable
     *
     * @param  array   $arguments
     *
     * @return boolean
     */
    protected function hasCallable(array $arguments)
    {
        return isset($arguments[0])
            && is_callable($arguments[0]);
    }
}
