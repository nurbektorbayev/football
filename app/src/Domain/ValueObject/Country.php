<?php

namespace App\Domain\ValueObject;

class Country
{
    public function __construct(protected CountryCode $code, protected CountryName $name)
    {
    }
}