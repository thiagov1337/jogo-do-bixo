<?php

namespace Bicho\Domain\Entities;

use Bicho\Domain\ValueObject\Numbers;

class Animal
{
    public function __construct(
        private string $name,
        private Numbers $numbers
    )
    {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getNumbers(): array
    {
        return $this->numbers->getNumbers();
    }


}