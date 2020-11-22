<?php

namespace Lo2s\LaravelPackage\Exceptions;

use Exception;
use Throwable;

class InvalidAcquiringProvider extends Exception
{
    public function __construct(
        $message = 'Invalid Acquiring Provider',
        $code = 0,
        Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
