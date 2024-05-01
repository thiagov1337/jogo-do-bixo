<?php

namespace Bicho\Adapters;

use Money\Money;
use Bicho\Domain\Contracts\MoneyInterface;

class MoneyAdapter implements MoneyInterface
{
    private Money $money;
    public function __construct($value)
    {
        $this->money = Money::BRL($value);
    }

    public function getAmount(): string
    {
        return $this->money->getAmount();
    }


}