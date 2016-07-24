<?php

namespace OldTimeGuitarGuy\Plaid\Contracts\Http\Codes;

interface ResponseCodes
{
    // Success
    const SUCCESS               = 200;
    const MFA_REQUIRED          = 201;

    // Client Errors
    const BAD_REQUEST           = 400;
    const UNAUTHORIZED          = 401;
    const REQUEST_FAILED        = 402;
    const CANNOT_BE_FOUND       = 404;
    const RATE_LIMIT_EXCEEDED   = 429;

    // Server Errors
    const PLAID_ERROR           = 500;
    const EXTRACTOR_ERROR       = 501;
    const EXTRACTOR_ERROR_RETRY = 502;
    const PLANNED_MAINTENANCE   = 503;
}
