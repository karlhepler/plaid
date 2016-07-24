<?php

return [

    /**
     * The client id used to connect with plaid
     */
    'client_id' => env('PLAID_CLIENT_ID', 'test_id'),

    /**
     * The secret used to connect with plaid
     */
    'secret' => env('PLAID_SECRET', 'test_secret'),

    /**
     * Determine whether or not we should use production
     */
    'use_production' => env('PLAID_USE_PRODUCTION', false),

];
