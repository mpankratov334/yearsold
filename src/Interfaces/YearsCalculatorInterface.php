<?php

namespace App\Interfaces;

interface YearsCalculatorInterface
{
    public static function calculate(string $date1, string $date2): int;
}
