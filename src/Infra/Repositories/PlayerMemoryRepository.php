<?php

namespace Bicho\Infra\Repositories;

use Bicho\Domain\Entities\Player;
use Bicho\Domain\Factories\PlayerFactory;

class PlayerMemoryRepository
{
    private array $players = [
        ['id' => 1, 'nickName' => 'Sr. Cleber'],
        ['id' => 2, 'nickName' => 'Sra. Roberta'],
    ];

    public function getById(int $playerId): Player
    {
        $player = current(array_filter($this->players, fn($player) => $player['id'] === $playerId));

        if (!$player) {
            throw new \InvalidArgumentException('not found');
        }

        return PlayerFactory::create([
            'id' => $player['id'],
            'nickName' => $player['nickName']
        ]);
    }
}