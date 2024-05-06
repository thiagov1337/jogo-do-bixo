<?php

namespace Bicho\Domain\ValueObject;

use Bicho\Application\Contracts\MoneyInterface;

class Money
{

    public function __construct(private string $amount)
    {
    }

    public function getAmount(): string
    {
        return $this->amount;
    }
}