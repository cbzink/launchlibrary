<?php

namespace cbzink\LaunchLibrary\Api;

use cbzink\LaunchLibrary\LL2;

class AbstractApi
{
    /**
     * LL2 client instance.
     *
     * @var LL2
     */
    protected $client;

    /**
     * Creates a new API instance.
     */
    public function __construct(LL2 $client)
    {
        $this->client = $client;
    }
}
