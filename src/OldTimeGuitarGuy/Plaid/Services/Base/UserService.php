<?php

namespace OldTimeGuitarGuy\Plaid\Services\Base;

use OldTimeGuitarGuy\Plaid\Contracts\User;

/**
 * It's the same as a normal service,
 * but also provides an instance of UserManager
 * and a get method to get the endpoint's main data.
 */
abstract class UserService extends Service
{
    /**
     * Instance of UserManager
     *
     * @var \OldTimeGuitarGuy\Plaid\Services\Base\UserManager
     */
    private $user;

    /**
     * Get an instance of UserManager
     *
     * @return \OldTimeGuitarGuy\Plaid\Services\Base\UserManager
     */
    public function user()
    {
        if ( isset($this->user) ) {
            return $this->user;
        }

        return $this->user = new UserManager($this->request, $this->endpoint());
    }

    /**
     * Get the data this service returns
     *
     * @param  User   $user
     * @param  array  $options
     *
     * @return \OldTimeGuitarGuy\Plaid\Contracts\Http\Response
     */
    public function get(User $user, array $options = [])
    {
        return $this->request->post($this->endpoint('get'), [
            'access_token' => $user->accessToken(),
            'options' => $options,
        ]);
    }
}
