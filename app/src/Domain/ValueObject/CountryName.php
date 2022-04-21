<?php

namespace App\Domain\ValueObject;

use Webmozart\Assert\Assert;

class CountryName implements \Stringable
{
    public function __construct(protected string $value)
    {
        Assert::stringNotEmpty($this->value, 'Invalid country name');

        $this->value = ucfirst($this->value);
    }

    public function __toString(): string
    {
        return $this->value;
    }
}