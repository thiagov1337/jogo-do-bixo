<?php

namespace Bicho\Tests\Unit\Domain;

use Bicho\Domain\ValueObject\Numbers;
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