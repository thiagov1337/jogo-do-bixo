<?php

namespace Bicho\Adapters;

use Money\Money;
use Bicho\Domain\Contracts\Money as MoneyInterface;

class MoneyAdapter implements MoneyInterface
{
    public function __construct(private Money $money)
    {
    }

    public function getAmount(): string
    {
        return $this->money->getAmount();
    }

}