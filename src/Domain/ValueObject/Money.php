<?php

namespace Bicho\Domain\ValueObject;

use Bicho\Domain\Contracts\MoneyInterface;

class Money
{
    private string $amount;

    public function __construct(private MoneyInterface $adapter)
    {
        $this->amount = $this->adapter->getAmount();
    }

    public function getAmount(): string
    {
        return $this->amount;
    }
}