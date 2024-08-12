<?php

namespace App\Interfaces;

interface YearsMorphologyInterface
{
    public static function toMorphology(int $num): string;
}
