<?php

namespace Bicho\Domain\Factories;

use Bicho\Domain\ValueObject\Numbers;

class NumbersFactory
{
    public static function create(array $values = []): Numbers
    {
        return new Numbers(
            numbers: $values
        );
    }
}