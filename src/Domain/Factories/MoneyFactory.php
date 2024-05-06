<?php

namespace Bicho\Domain\Factories;

use Bicho\Domain\ValueObject\Money;
use Bicho\Infra\Adapters\MoneyAdapter;

class MoneyFactory
{
    public static function create(string $value = ''): Money
    {
        return new Money(
            new MoneyAdapter($value)
        );
    }

}