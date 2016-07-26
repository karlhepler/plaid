<?php

namespace OldTimeGuitarGuy\Plaid\Services;

/**
 * The Risk endpoint allows you to retrieve various
 * information pertaining to a user's calculated risk.
 * Risk profiles are generated for each underlying account
 * and include an overall score, a breakdown of the score
 * by various contributing parameters, and the extent of
 * data available for analysis.
 * 
 * Plaid’s risk algorithm detects abnormal behavior by
 * comparing new bank accounts to an internal database.
 * While directly detecting risky behavior is challenging,
 * we use our large dataset to identify normal patterns.
 * Once an account is found to deviate from our definition
 * of normal in our carefully chosen parameter space it
 * is flagged as abnormal.
 *
 * https://plaid.com/docs/api/#risk
 */
class Risk extends Base\UserService
{
    /**
     * Get the main endpoint for this service
     *
     * @param  string|null $path
     * 
     * @return string
     */
    protected function endpoint($path = null)
    {
        return $this->path('risk', $path);
    }
}
