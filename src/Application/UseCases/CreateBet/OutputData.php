<?php

namespace Bicho\Application\UseCases\CreateBet;

use Bicho\Domain\Entities\Animal;
use Bicho\Domain\Entities\Player;

class OutputData
{
   public function __construct(
       public readonly int $id,
       public readonly string $amount,
       public readonly Player $player,
       public readonly Animal $animal,
   )
   {
   }
}