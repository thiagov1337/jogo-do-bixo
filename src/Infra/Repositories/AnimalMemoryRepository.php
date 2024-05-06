<?php

namespace Bicho\Infra\Repositories;

use Bicho\Domain\Entities\Animal;
use Bicho\Domain\Factories\AnimalFactory;
use Bicho\Domain\Repositories\AnimalRepository;

class AnimalMemoryRepository implements AnimalRepository
{
    private array $animals = [
        ['id' => 1, 'name' => 'AVESTRUZ', 'numbers' => ['01', '02', '03', '04']],
        ['id' => 2, 'name' => 'ÁGUIA', 'numbers' => ['05', '06', '07', '08']],
        ['id' => 3, 'name' => 'BURRO', 'numbers' => ['09', '10', '11', '12']],
        ['id' => 4, 'name' => 'BORBOLETA', 'numbers' => ['13', '14', '15', '16']],
        ['id' => 5, 'name' => 'CACHORRO', 'numbers' => ['17', '18', '19', '20']],
        ['id' => 6, 'name' => 'CABRA', 'numbers' => ['21', '22', '23', '24']],
        ['id' => 7, 'name' => 'CARNEIRO', 'numbers' => ['25', '26', '27', '28']],
        ['id' => 8, 'name' => 'CAMELO', 'numbers' => ['29', '30', '31', '32']],
        ['id' => 9, 'name' => 'COBRA', 'numbers' => ['33', '34', '35', '36']],
        ['id' => 10, 'name' => 'COELHO', 'numbers' => ['37', '38', '39', '40']],
        ['id' => 11, 'name' => 'CAVALO', 'numbers' => ['41', '42', '43', '44']],
        ['id' => 12, 'name' => 'ELEFANTE', 'numbers' => ['45', '46', '47', '48']],
        ['id' => 13, 'name' => 'GAIVOTA', 'numbers' => ['49', '50', '51', '52']],
        ['id' => 14, 'name' => 'GATO', 'numbers' => ['53', '54', '55', '56']],
        ['id' => 15, 'name' => 'JACARÉ', 'numbers' => ['57', '58', '59', '60']],
        ['id' => 16, 'name' => 'LEÃO', 'numbers' => ['61', '62', '63', '64']],
        ['id' => 17, 'name' => 'MACACO', 'numbers' => ['65', '66', '67', '68']],
        ['id' => 18, 'name' => 'ONÇA', 'numbers' => ['69', '70', '71', '72']],
        ['id' => 19, 'name' => 'PAVÃO', 'numbers' => ['73', '74', '75', '76']],
        ['id' => 20, 'name' => 'PERU', 'numbers' => ['77', '78', '79', '80']],
        ['id' => 21, 'name' => 'TOURO', 'numbers' => ['81', '82', '83', '84']],
        ['id' => 22, 'name' => 'TIGRE', 'numbers' => ['85', '86', '87', '88']],
        ['id' => 23, 'name' => 'URSO', 'numbers' => ['89', '90', '91', '92']],
        ['id' => 24, 'name' => 'VEADO', 'numbers' => ['93', '94', '95', '96']],
        ['id' => 25, 'name' => 'VACA', 'numbers' => ['97', '98', '99', '00']],
    ];

    public function getById(int $animalId): Animal
    {
        $animal = current(array_filter($this->animals, fn($animal) => $animal['id'] === $animalId));

        if (!$animal) {
            throw new \InvalidArgumentException('not found');
        }

        return AnimalFactory::create([
            'name' => $animal['name'],
            'numbers' => $animal['numbers']
        ]);
    }
}