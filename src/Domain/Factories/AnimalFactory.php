<?php

namespace Bicho\Domain\Factories;

use Bicho\Domain\Entities\Animal;
use Bicho\Domain\ValueObject\Numbers;

class AnimalFactory
{

    public static function create(array $values = []): Animal
    {
        return new Animal(
            name: $values['name'],
            numbers: NumbersFactory::create([$values['numbers']])
        );
    }
}