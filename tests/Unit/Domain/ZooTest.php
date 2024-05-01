<?php

namespace Bicho\Tests\Unit\Domain;

use Bicho\Domain\Entities\Animal;
use Bicho\Domain\Entities\TableAnimal;
use Bicho\Domain\ValueObject\Numbers;
use PHPUnit\Framework\TestCase;

class ZooTest extends TestCase
{
    private TableAnimal $zoo;

    protected function setUp(): void
    {
        $this->zoo = new TableAnimal();
    }

    public function testAddAnimal()
    {
        // Arrange
        $animal = new Animal("Avestruz", new Numbers([1, 5, 3, 7]));

        // Act
        $this->zoo->add($animal);
        $animals = $this->zoo->getAnimals();

        // Assert
        $this->assertCount(1, $animals); // Verifica se um animal foi adicionado
        $this->assertSame($animal, $animals[0]); // Verifica se o animal adicionado é o mesmo que foi passado
    }
}

