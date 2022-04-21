<?php

namespace App\Shared\Domain\ValueObject;
use Symfony\Component\Uid\Uuid as BaseUuid;

class Uuid
{
    protected BaseUuid $value;

    public function __construct(string $uuid)
    {
        $this->value = new BaseUuid($uuid);
    }

    public function value(): string
    {
        return $this->value->__toString();
    }

    public function equals(Uuid $other): bool
    {
        return $this === $other;
    }

    public function __toString(): string
    {
        return $this->value();
    }

    public static function fromString(string $uuid): static
    {
        return new static($uuid);
    }

    public static function random(): static
    {
        return new static(BaseUuid::v4()->__toString());
    }
}