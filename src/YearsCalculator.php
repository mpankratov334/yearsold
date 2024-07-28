<?php

namespace src;

use DateTime;

class YearsCalculator
{
    public static function calculate(string $date): int
    {
        $dateInPast = new DateTime($date);
        $currentDate = new DateTime();
        $diff = $dateInPast->diff($currentDate);
        return $diff->y;
    }
}