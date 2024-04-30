<?php

namespace Bicho\Domain\ValueObject;

class Numbers
{
    private array $numbers;
    const MIN_VALUE = 0;
    const MAX_VALUE = 99;

    public function __construct(array $numbers)
    {
        if (count($numbers) <> 4) {
            throw new \InvalidArgumentException('Invalid number of numbers');
        }

        foreach($numbers as $number){
            $this->checkNumber($number);
        }

        $this->numbers = $numbers;
    }

    public function getNumbers(): array
    {
        return $this->numbers;
    }

    private function checkNumber(int $number): void
    {
        if ($number > self::MAX_VALUE || $number < self::MIN_VALUE) {
            throw new \InvalidArgumentException('Invalid value');
        }
    }
}