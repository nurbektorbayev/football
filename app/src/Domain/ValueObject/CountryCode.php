<?php

namespace App\Domain\ValueObject;

use Webmozart\Assert\Assert;

class CountryCode implements \Stringable
{
    public function __construct(protected string $value)
    {
        Assert::stringNotEmpty($this->value, 'Invalid country code');

        if (str_contains($this->value, ' ')) {
            throw new \InvalidArgumentException('Country code cannot contain space char');
        }

        $this->value = mb_strtoupper($this->value);
    }

    public function __toString(): string
    {
        return $this->value;
    }
}