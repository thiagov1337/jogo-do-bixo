<?php

namespace Bicho\Tests\Unit\Domain;

use Bicho\Domain\Entities\Bet;
use Bicho\Domain\Factories\BetFactory;
use PHPUnit\Framework\TestCase;

class BetTest extends TestCase
{
    private Bet $bet;

    protected function setUp(): void
    {
        $this->bet = BetFactory::create([
            'amount' => '500',
            'animal' => [
                'name' => 'burro',
                'numbers' => [1, 2, 3, 4]
            ],
            'player' => [
                'nickName' => 'Nick'
            ]
        ]);

    }

    public function testCloseBet()
    {
        self::assertTrue($this->bet->closeBet());
    }

}