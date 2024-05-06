<?php

namespace Bicho\Domain\Repositories;

use Bicho\Domain\Entities\Animal;

interface AnimalRepository
{
    public function getById(int $animalId): Animal;

}