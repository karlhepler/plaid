<?php

namespace OldTimeGuitarGuy\Plaid\Services;

/**
 * Send a request to the /institutions route to
 * get detailed information on the Financial Institutions
 * currently supported by Plaid. This endpoint requires no authentication.
 *
 * https://plaid.com/docs/api/#institutions
 *
 * Plaid supports Connect data for more than 17,000 financial
 * institutions through a variety of partnerships. A full list
 * of supported institutions can be accessed by making a request
 * to the /institutions/longtail endpoint with an authorized set of API keys.
 *
 * https://plaid.com/docs/api/#long-tail-institutions
 */
class Institutions extends Base\Service
{
    /**
     * Send a request to the /institutions route
     * to get detailed information on the
     * Financial Institutions currently supported by Plaid.
     * This endpoint requires no authentication.
     *
     * https://plaid.com/docs/api/#institution-overview
     *
     * @param  string|null $type This can either be the institution type or id
     *
     * @return \OldTimeGuitarGuy\Plaid\Contracts\Http\Response
     */
    public function get($type = null)
    {
        return $this->request->get($this->endpoint($type));
    }

    /**
     * Returns a JSON response containing details
     * for all institutions that match the query parameters.
     *
     * https://plaid.com/docs/api/#institution-search
     *
     * @param  string $query   A search query to match against the full list of institutions. Partial matches are returned making this useful for autocompletion purposes.
     * @param  string $product Value indicating the Plaid product to filter results by. Only valid when combined with the q option. If omitted, results are not filtered by product.
     *
     * @return \OldTimeGuitarGuy\Plaid\Contracts\Http\Response
     */
    public function search($query, $product = null)
    {
        return $this->request->get($this->endpoint('search'), [
            'q' => $query,
            'p' => $product,
        ]);
    }

    /**
     * Search by the id of a single institution for lookup.
     *
     * https://plaid.com/docs/api/#institution-search
     *
     * @param  string $id The id of a single institution for lookup.
     *
     * @return \OldTimeGuitarGuy\Plaid\Contracts\Http\Response
     */
    public function searchById($id)
    {
        return $this->request->get($this->endpoint('search'), compact('id'));
    }

    /**
     * Returns a JSON response containing details
     * on all long tail institutions supported by Plaid.
     * Due to the large number of supported institutions
     * accessible through this endpoint, results are paged.
     * Use the count and offset query parameters to retrieve
     * the desired institution data.
     *
     * @param  integer $count  The number of results to retrieve. Default is 50.
     * @param  integer $offset An integer number of results to skip forward from the beginning of the list. Default is 0.
     *
     * @return \OldTimeGuitarGuy\Plaid\Contracts\Http\Response
     */
    public function longtail($count = 50, $offset = 0)
    {
        return $this->request->post($this->endpoint('longtail'), compact('count', 'offset'));
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
        return $this->path('institutions', $path);
    }
}
