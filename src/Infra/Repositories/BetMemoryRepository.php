<?php

namespace Bicho\Infra\Repositories;

use Bicho\Domain\Entities\Animal;
use Bicho\Domain\Entities\Bet;
use Bicho\Domain\Entities\Player;
use Bicho\Domain\Factories\BetFactory;
use Bicho\Domain\Repositories\BetRepository;

class BetMemoryRepository implements BetRepository
{
    private array $bets = [];

    private int $increment = 1;

    public function save(string $amount, Player $player, Animal $animal): Bet
    {
        $bet = BetFactory::create([
            'id' => $this->increment,
            'amount' => $amount,
            'player' => [
                'id' => $player->getId(),
                'nickName' => $player->getNickName(),
            ],
            'animal' => [
                'name' => $animal->getName(),
                'numbers' => $animal->getNumbers(),
            ]
        ]);

        $this->bets[] = $bet;

        $this->increment++;

        return $bet;
    }

    public function getById(int $betId): Bet
    {
        $bet = current(array_filter($this->bets, fn($bet) => $bet['id'] === $betId));

        if (!$bet) {
            throw new \InvalidArgumentException('not found');
        }

        return BetFactory::create([
            'amount' => $bet['amount'],
            'player' => $bet['player'],
            'animal' => $bet['animal']
        ]);
    }

    public function getAll(): array
    {
        return $this->bets;
    }
}