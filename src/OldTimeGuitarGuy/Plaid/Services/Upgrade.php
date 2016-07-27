<?php

namespace OldTimeGuitarGuy\Plaid\Services;

use OldTimeGuitarGuy\Plaid\Contracts\User;

class Upgrade extends Base\Service
{
    /**
     * Upgrade a User
     *
     * https://plaid.com/docs/api/#upgrade-user
     *
     * @param  User   $user
     * @param  string $product The product to add for the user: auth, connect, income, info, or risk.
     * @param  array  $options
     *
     * @return \OldTimeGuitarGuy\Plaid\Contracts\Http\Response
     */
    public function to(User $user, $product, $options = [])
    {
        return $this->request->post($this->endpoint(), [
            'access_token' => $user->accessToken(),
            'upgrade_to' => $product,
            'options' => $options,
        ]);
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
        return $this->path('upgrade', $path);
    }
}
