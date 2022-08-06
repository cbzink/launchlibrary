<?php

namespace cbzink\LaunchLibrary\Exceptions;

use Exception;

class InvalidTokenException extends Exception
{
    /**
     * Create a new exception instance.
     */
    public function __construct()
    {
        parent::__construct('Invalid token.');
    }
}
