<?php

namespace Bicho\Domain\Repositories;

use Bicho\Domain\Entities\Animal;
use Bicho\Domain\Entities\Bet;
use Bicho\Domain\Entities\Player;

interface BetRepository
{
    public function save(string $amount, Player $player, Animal $animal): Bet;

    public function getById(int $betId): Bet;

    public function getAll(): array;

}