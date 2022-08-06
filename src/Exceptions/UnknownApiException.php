<?php

namespace cbzink\LaunchLibrary\Exceptions;

use Exception;

class UnknownApiException extends Exception
{
    /**
     * Create a new exception.
     */
    public function __construct(string $apiName)
    {
        parent::__construct("Unknown API \"{$apiName}\" called.");
    }
}
