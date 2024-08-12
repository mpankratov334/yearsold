<?php

namespace App;

use App\interfaces\YearsMorphologyInterface;
use Dotenv\Dotenv;


class YearsMorphology implements YearsMorphologyInterface
{
    public static function toMorphology(int $num): string
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/..');
        $dotenv->load();

        $bigSuffix = $num % 100;
        if ($bigSuffix <= 14 and $bigSuffix >= 11){
            return $_ENV['RuSUFFIX_YEARS'];
        }

        $suffix = $num % 10;
        if ($suffix == 1) {
            return $_ENV['RuSUFFIX_ONE_YEAR'];
        }
        elseif ($suffix >= 2 and $suffix <= 4) {
            return $_ENV['RuSUFFIX_FEW_YEARS'];
        }
        else{
            return $_ENV['RuSUFFIX_YEARS'];
        }
    }
}