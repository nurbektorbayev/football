<?php

namespace App\Domain\ValueObject;

use Webmozart\Assert\Assert;

class LeagueName
{
    public function __construct(protected string $value)
    {
        Assert::stringNotEmpty($this->value, 'Invalid league name');

        $this->value = ucfirst($this->value);
    }

    public function __toString(): string
    {
        return $this->value;
    }
}