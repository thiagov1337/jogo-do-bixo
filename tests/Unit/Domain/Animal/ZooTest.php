<?php

namespace Bicho\Tests\Unit\Domain\Animal;

use Bicho\Domain\Animal\Animal;
use Bicho\Domain\Animal\Numbers;
use Bicho\Domain\Animal\Zoo;
use PHPUnit\Framework\TestCase;

class ZooTest extends TestCase
{
    private Zoo $zoo;

    protected function setUp(): void
    {
        $this->zoo = new Zoo();
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

