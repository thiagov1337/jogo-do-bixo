<?php

namespace Bicho\Infra\Adapters;

use Bicho\Application\Contracts\MoneyInterface;
use Money\Money;

class MoneyPHPAdapter implements MoneyInterface
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