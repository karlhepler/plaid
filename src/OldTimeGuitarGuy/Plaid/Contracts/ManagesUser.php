<?php

namespace OldTimeGuitarGuy\Plaid\Contracts;

interface ManagesUser
{
    /**
     * Add User
     *
     * @param string $type     The institution code that you want to access.
     * @param string $username Username associated with the user's financial institution.
     * @param string $password Password associated with the user's financial institution.
     * @param mixed  $pin      Pin number required only for USAA accounts.
     * @param array  $options
     */
    public function addUser($type, $username, $password, $pin = null, $options = []);

    /**
     * MFA
     *
     * @param  string $access_token The access_token is returned when the user is added.
     * @param  string $mfa          The extra information needed in the format: {mfa:'xxxxx'}.
     * @param  array  $options
     * 
     * @return \OldTimeGuitarGuy\Plaid\Contracts\Http\Response
     */
    public function mfa($access_token, $mfa, $options = []);

    /**
     * Update User
     *
     * @param  string $access_token The ACCESS_TOKEN of the user you wish to update.
     * @param  string $username     Username associated with the user's financial institution.
     * @param  string $password     Password associated with the user's financial institution.
     * @param  mixed  $pin          Pin number associated with the user's financial institution. (usaa only)
     * 
     * @return \OldTimeGuitarGuy\Plaid\Contracts\Http\Response
     */
    public function updateUser($access_token, $username, $password, $pin = null);

    /**
     * Delete User
     *
     * @param  string $access_token The ACCESS_TOKEN that you wish to be removed from your account.
     * 
     * @return \OldTimeGuitarGuy\Plaid\Contracts\Http\Response
     */
    public function deleteUser($access_token);
}
