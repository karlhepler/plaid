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
    protected $statusCode;

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
        $this->statusCode = $response->getStatusCode();
        $this->content = json_decode($response->getBody()->getContents());
    }

    /**
     * Get the status code
     *
     * @return integer
     */
    public function statusCode()
    {
        return $this->statusCode;
    }

    /**
     * Dynamically reference the initial layer of the content
     *
     * @param  string $method
     * @param  array  $arguments
     * 
     * @return \stdClass
     * @throws \BadMethodCallException
     */
    public function __call($method, array $arguments)
    {
        if (! isset($this->content->{$method}) ) {
            throw new \BadMethodCallException("{$method} is not a valid response method.");
        }
        
        return $this->content->{$method};
    }

    /**
     * Reference methods as properties
     *
     * @param  string $value
     * 
     * @return mixed
     */
    public function __get($value)
    {
        return $this->{$value}();
    }

    /**
     * The string representation of the response
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode([
            'statusCode' => $this->statusCode,
            'content' => $this->content,
        ]);
    }
}
