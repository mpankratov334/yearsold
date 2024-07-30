<?php

namespace App;

use App\interfaces\YearsCalculatorInterface;
use DateTime;

class YearsCalculator implements YearsCalculatorInterface
{
    public static function calculate(string $date1, string $date2): int
    {
        $datePast = new DateTime($date1);
        $dateNow = new DateTime($date2);
        if ($datePast > $dateNow ) {
            throw new \Exception("Date from future");
        }
        $diff = $datePast->diff($dateNow);
        if ($diff->y < 1) {
            throw new \Exception("Date in range 1 year");
        }
        return $diff->y;
    }
}