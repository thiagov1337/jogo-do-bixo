<?php

namespace Bicho\Domain\Player;

use Bicho\Domain\Bet\Bet;

class Player
{
    private array $bets;

    public function __construct(private string $nickName)
    {
    }

    public function addBet(Bet $bet): void{
        $this->bets[] = $bet;
    }

    public function getNickName(): string
    {
        return $this->nickName;
    }
}