<?php

namespace Bicho\Application\UseCases\CreateBet;

class InputData
{
    function __construct(
        public readonly string $amount,
        public readonly int $animalId,
        public readonly int $playerId,
    )
    {
    }
}