<?php

class ResponseTest extends ServiceTest
{
    public function testIterateThroughArrayableTopLevelContents()
    {
        $response = $this->plaid()->connect()->user()->add('wells', $this->credentials());

        $response->accounts(function($account) {
            $this->assertInstanceOf(\stdClass::class, $account);
        });

        $response->transactions(function($transaction) {
            $this->assertInstanceOf(\stdClass::class, $transaction);
        });
    }
}
