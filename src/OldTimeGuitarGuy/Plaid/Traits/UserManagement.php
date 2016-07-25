<?php

namespace OldTimeGuitarGuy\Plaid\Traits;

trait UserManagement
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
    public function addUser($type, $username, $password, $pin = null, $options = [])
    {
        // Allow pin to optionally be set as options
        if ( is_array($pin) ) {
            $options = $pin;
            $pin = null;
        }
        
        return $this->request->post($this->endpoint, get_defined_vars());
    }

    /**
     * MFA
     *
     * @param  string $access_token The access_token is returned when the user is added.
     * @param  string $mfa          The extra information needed in the format: {mfa:'xxxxx'}.
     * @param  array  $options
     * 
     * @return \OldTimeGuitarGuy\Plaid\Contracts\Http\Response
     */
    public function mfa($access_token, $mfa, $options = [])
    {
        return $this->request->post("{$this->endpoint}/step", get_defined_vars());
    }

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
    public function updateUser($access_token, $username, $password, $pin = null)
    {
        return $this->request->patch($this->endpoint, get_defined_vars());
    }

    /**
     * Delete User
     *
     * @param  string $access_token The ACCESS_TOKEN that you wish to be removed from your account.
     * 
     * @return \OldTimeGuitarGuy\Plaid\Contracts\Http\Response
     */
    public function deleteUser($access_token)
    {
        return $this->request->delete($this->endpoint, compact('access_token'));
    }
}
