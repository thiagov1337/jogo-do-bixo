<?php

namespace Bicho\Application\UseCases\CreateBet;

use Bicho\Domain\Repositories\BetRepository;
use Bicho\Domain\Repositories\PlayerRepository;
use Bicho\Domain\Repositories\AnimalRepository;

class CreateBet
{
    public function __construct(
        private BetRepository    $betRepository,
        private PlayerRepository $playerRepository,
        private AnimalRepository $animalRepository,
    )
    {
    }

    public function execute(InputData $inputData): OutputData
    {
        if (!$inputData->amount > 0) {
            throw new \InvalidArgumentException('Amount invalid');
        }

        $player = $this->playerRepository->getById($inputData->playerId);
        $animal = $this->animalRepository->getById($inputData->animalId);

        $bet = $this->betRepository->save(
            amount: $inputData->amount,
            player: $player,
            animal: $animal
        );

        return new OutputData(
            id: $bet->getId(),
            amount: $bet->getAmount(),
            player: $player,
            animal: $animal
        );
    }
}