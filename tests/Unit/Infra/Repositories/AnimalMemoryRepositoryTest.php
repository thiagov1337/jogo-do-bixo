<?php

namespace Bicho\Tests\Unit\Infra\Repositories;

use Bicho\Domain\Entities\Animal;
use Bicho\Infra\Repositories\AnimalMemoryRepository;
use PHPUnit\Framework\TestCase;

class AnimalMemoryRepositoryTest extends TestCase
{
    private AnimalMemoryRepository $repository;

    protected function setUp(): void
    {
        $this->repository = new AnimalMemoryRepository();
    }

    public function testGetByIdReturnAnimal()
    {
        self::assertInstanceOf(Animal::class, $this->repository->getById(17));
    }
}