<?php

namespace Bicho\Domain\Factories;

use Bicho\Domain\Entities\Bet;

class BetFactory
{
    public static function create(array $values = []): Bet
    {
        return new Bet(
            id: $values['id'],
            money: MoneyFactory::create($values['amount']),
            animal: AnimalFactory::create($values['animal']),
            player: PlayerFactory::create($values['player'])
        );
    }
}