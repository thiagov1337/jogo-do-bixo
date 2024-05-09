<?php

namespace Bicho\Tests\Unit\Infra\Repositories;

use Bicho\Domain\Entities\Bet;
use Bicho\Domain\Factories\AnimalFactory;
use Bicho\Domain\Factories\BetFactory;
use Bicho\Domain\Factories\PlayerFactory;
use Bicho\Infra\Repositories\BetMemoryRepository;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertInstanceOf;

class BetMemoryRepositoryTest extends TestCase
{
    private BetMemoryRepository $repository;

    protected function setUp(): void
    {
        $this->repository = new BetMemoryRepository();
    }

    public function testShouldCreateBetMemory()
    {

        $amount = '500';
        $animal = AnimalFactory::create([
            'name' => 'burro',
            'numbers' => [1, 2, 3, 4]
        ]);

        $player = PlayerFactory::create([
            'id' => 1,
            'nickName' => 'Nick'
        ]);

        assertInstanceOf(Bet::class, $this->repository->save(
            amount: $amount, player: $player, animal: $animal
        ));
    }


}