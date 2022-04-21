<?php

namespace App\Domain\Entity;

use App\Domain\ValueObject\LeagueName;
use App\Shared\Domain\ValueObject\Uuid;

class League
{
    public function __construct(protected Uuid $uuid, protected LeagueName $name)
    {
    }
}