<?php

namespace Bicho\Domain\Entities;

class Player
{
    private array $bets = [];

    public function __construct(
        private readonly int $id,
        private readonly string $nickName,
    )
    {
    }

    public function addBet(Bet $bet): void
    {
        $this->bets[] = $bet;
    }

    public function getNickName(): string
    {
        return $this->nickName;
    }

    public function getId(): int
    {
        return $this->id;
    }
}