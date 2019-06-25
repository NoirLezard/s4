<?php

declare(strict_types=1);

namespace App\Service;
namespace App\Service\Calculator;

class Calculator
{
    public function add(int $firstNumber, int $secondNumber): int
    {
        return $firstNumber + $secondNumber;
    }
}
