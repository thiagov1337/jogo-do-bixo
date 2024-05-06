<?php

namespace Bicho\Domain\Repositories;

use Bicho\Domain\Entities\Player;

interface PlayerRepository
{

    public function getById(int $playerId): Player;
}