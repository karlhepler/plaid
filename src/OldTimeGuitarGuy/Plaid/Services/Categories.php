<?php

namespace OldTimeGuitarGuy\Plaid\Services;

/**
 * Send a request to the /categories route to
 * get detailed information on categories returned
 * by Plaid. This endpoint requires no authentication.
 *
 * https://plaid.com/docs/api/#categories
 */
class Categories extends Base\Service
{
    /**
     * Get Plaid categories
     *
     * @param  integer|null $id
     *
     * @return \OldTimeGuitarGuy\Plaid\Contracts\Http\Response
     */
    public function get($id = null)
    {
        return $this->request->get($this->endpoint($id));
    }

    ///////////////////////
    // PROTECTED METHODS //
    ///////////////////////

    /**
     * Get the main endpoint for this service
     *
     * @param  string|null $path
     * 
     * @return string
     */
    protected function endpoint($path = null)
    {
        return $this->path('categories', $path);
    }
}
