<?php

namespace Bicho\Tests\Unit\Domain\Animal;

use Bicho\Domain\Animal\Numbers;
use PHPUnit\Framework\TestCase;

class NumbersTest extends TestCase
{
    public function testQuantityEqualThanFourAndBetweenMinToMaxValues()
    {
        self::assertInstanceOf(
            Numbers::class,
            new Numbers([99, 5, 5, 4])
        );
    }

}