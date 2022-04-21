<?php

namespace App\Shared\Domain\ValueObject;

class Id
{
    public function __construct(protected int $value)
    {
        if ($this->value <= 0) {
            throw new \InvalidArgumentException(sprintf('Invalid ID: "%d"', $this->value));
        }
    }

    public function value(): int
    {
        return $this->value;
    }
}