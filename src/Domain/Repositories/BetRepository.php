<?php

namespace Bicho\Domain\Repositories;

use Bicho\Domain\Entities\Animal;
use Bicho\Domain\Entities\Bet;
use Bicho\Domain\Entities\Player;

interface BetRepository
{
    public function save(Bet $bet): Bet;
}