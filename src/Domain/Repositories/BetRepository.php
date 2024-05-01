<?php

namespace Bicho\Domain\Repositories;

use Bicho\Domain\Entities\Bet;

interface BetRepository
{
    public function save(Bet $bet): Bet;
}