<?php

namespace Bicho\Domain\Entities;



use Bicho\Domain\ValueObject\Money;

class Bet
{
    private bool $closed = false;

    public function __construct(
        private Money  $money,
        private Animal $animal,
        private Player $player
    )
    {
    }

    public function closeBet(): bool
    {
        return $this->closed = true;
    }

    public function __toString(): string
    {
        return "'{$this->player->getNickName()}' bet {$this->$money->getAmount()} on {$this->animal->getName()}";
    }

}