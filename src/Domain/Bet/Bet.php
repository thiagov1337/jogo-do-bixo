<?php

namespace Bicho\Domain\Bet;

use Bicho\Domain\Animal\Animal;
use Bicho\Domain\Player\Player;
use Money\Money;

class Bet
{
    private bool $closed = false;
    public function __construct(
        private Money $value,
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
        return "'{$this->player->getNickName()}' bet {$this->value->getAmount()} on {$this->animal->getName()}";
    }

}