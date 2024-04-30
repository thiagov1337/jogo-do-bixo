<?php

namespace Bicho\Domain\UseCases\CreateBet;

use Bicho\Domain\Entities\Player;
use Bicho\Domain\Repositories\BetRepository;

class CreateBet
{
    public function __construct(
        private BetRepository $BetRepository,
    )
    {
    }

    public function execute(InputData $inputData): OutputData
    {
        $this->BetRepository->save();

    }
}