<?php

namespace Bicho\Tests\Unit\Domain;

use Bicho\Domain\Entities\Animal;
use Bicho\Domain\Entities\TableAnimal;
use Bicho\Domain\ValueObject\Numbers;
use PHPUnit\Framework\TestCase;

class TableAnimalTest extends TestCase
{
    private TableAnimal $animals;

    protected function setUp(): void
    {
        $this->animals = new TableAnimal();
    }

    public function testAddAnimal()
    {
        // Arrange
        $animal = new Animal("Avestruz", new Numbers([1, 5, 3, 7]));

        // Act
        $this->animals->add($animal);
        $animals = $this->animals->getAnimals();

        // Assert
        $this->assertCount(1, $animals); // Verifica se um animal foi adicionado
        $this->assertSame($animal, $animals[0]); // Verifica se o animal adicionado é o mesmo que foi passado
    }
}

