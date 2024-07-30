<?php

namespace App;

use App\interfaces\YearsMorphologyInterface;

class YearsMorphology implements YearsMorphologyInterface
{
    public static function morphology(int $num): string
    {
        $bigSuffix = $num % 100;
        if ($bigSuffix <= 14 and $bigSuffix >= 11){
            return "лет";
        }

        $suffix = $num % 10;
        if ($suffix == 1) {
            return "год";
        }
        elseif ($suffix >= 2 and $suffix <= 4) {
            return "года";
        }
        else{
            return "лет";
        }
    }
}