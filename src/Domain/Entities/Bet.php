<?php

namespace Bicho\Domain\Entities;


class Bet
{
    private bool $closed = false;
    public function __construct(
        private string $value,
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
        return "'{$this->player->getNickName()}' bet {$this->value} on {$this->animal->getName()}";
    }

}