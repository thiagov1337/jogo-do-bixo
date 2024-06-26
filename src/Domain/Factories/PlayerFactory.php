<?php

namespace Bicho\Domain\Factories;

use Bicho\Domain\Entities\Player;

class PlayerFactory
{
    public static function create(array $values = []): Player
    {
        return new Player(
            id: $values['id'],
            nickName: $values['nickName']
        );
    }
}