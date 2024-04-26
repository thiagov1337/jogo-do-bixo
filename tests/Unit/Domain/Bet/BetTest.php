<?php

namespace Bicho\Tests\Unit\Domain\Bet;

use Bicho\Domain\Animal\Animal;
use Bicho\Domain\Animal\Numbers;
use Bicho\Domain\Bet\Bet;
use Bicho\Domain\Player\Player;
use Money\Money;
use PHPUnit\Framework\TestCase;

class BetTest extends TestCase
{
    private Bet $bet;

    protected function setUp(): void
    {
        $this->bet = new Bet(
            Money::BRL(500),
            new Animal(
                'Monkey',
                new Numbers([1, 2, 3, 4]),
            ),
            new Player('Nick')
        );

    }

    public function testCloseBet()
    {
        self::assertTrue($this->bet->closeBet());
    }

}