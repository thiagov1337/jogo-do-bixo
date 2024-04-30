<?php

namespace Bicho\Domain\Contracts;

interface Money
{
    public function getAmount(): string;
}