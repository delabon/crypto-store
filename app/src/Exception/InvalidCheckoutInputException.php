<?php

namespace App\Exception;

use InvalidArgumentException;
use Throwable;

class InvalidCheckoutInputException extends InvalidArgumentException
{
    private array $errors = [];

    public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null, array $errors = [])
    {
        parent::__construct($message, $code, $previous);

        $this->errors = $errors;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function setErrors(array $errors): void
    {
        $this->errors = $errors;
    }
}