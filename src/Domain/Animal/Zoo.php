<?php

namespace Bicho\Domain\Animal;

use Ds\Map;


class Zoo
{
    private Map $animals;
    private \DateTimeInterface $dataEdition;
    public function __construct()
    {
        $this->animals = new Map();
        $this->dataEdition = new \DateTimeImmutable();
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