<?php

namespace cbzink\LaunchLibrary\Exceptions;

use Exception;

class NotFoundException extends Exception
{
    /**
     * Create a new exception instance.
     */
    public function __construct()
    {
        parent::__construct('Resource not found.');
    }
}
