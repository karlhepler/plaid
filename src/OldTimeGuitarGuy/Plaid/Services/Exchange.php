<?php

namespace OldTimeGuitarGuy\Plaid\Services;

/**
 * The /exchange endpoint allows developers to Exchange a Link public_token for an API access_token
 * A public_token becomes invalidated once it has been successfully exchanged for an access_token
 *
 * https://plaid.com/docs/api/
 */
class Exchange extends Base\Service
{
    /**
     * Get the main endpoint for this service
     *
     * @param  string|null $path
     *
     * @return string
     */
    public function endpoint($path = null)
    {
        return $this->path('exchange_token', $path);
    }

    /**
     * Get the access token
     *
     * @param $public_token
     * @return \OldTimeGuitarGuy\Plaid\Contracts\Http\Response
     */
    public function exchange($public_token)
    {
        return $this->request->post($this->endpoint(),[
            'public_token' => $public_token
        ]);
    }
}