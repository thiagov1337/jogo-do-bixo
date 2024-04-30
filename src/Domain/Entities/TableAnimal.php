<?php

namespace Bicho\Domain\Entities;

use Ds\Map;

class TableAnimal
{

    private Map $animals;
    public function __construct()
    {
        $this->animals = new Map();
    }

    public function add(Animal $animal): void
    {
        if ($this->count() > 25) {
            throw new \InvalidArgumentException('Animal limit exceeded');
        }

        $this->animals->put($this->count(), $animal);
    }

    public function count(): int
    {
        return $this->animals->count();
    }

    public function getAnimals(): array
    {
        return $this->animals->toArray();
    }
}