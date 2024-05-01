<?php

namespace Bicho\Domain\Contracts;

use Bicho\Domain\ValueObject\Money;

interface MoneyInterface
{
    public function getAmount(): string;
}