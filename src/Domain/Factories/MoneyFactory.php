<?php

namespace Bicho\Domain\Factories;

use Bicho\Domain\ValueObject\Money;

class MoneyFactory
{
    public static function create(string $value = ''): Money
    {
        return new Money($value);
    }

}