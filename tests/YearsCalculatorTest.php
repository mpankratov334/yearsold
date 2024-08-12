<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use App\YearsCalculator;

class YearsCalculatorTest extends TestCase
{
    public function testCalculate()
    {
        $datePast = '2000-01-01';
        $expectedYears = (new \DateTime())->diff(new \DateTime($datePast))->y;
        $this->assertEquals($expectedYears, YearsCalculator::calculate($datePast, date("Y-m-d")));
        $datePast = '2022-01-01';
        $expectedYears = (new \DateTime())->diff(new \DateTime($datePast))->y;
        $this->assertEquals($expectedYears, YearsCalculator::calculate($datePast, date("Y-m-d")));
        $datePast = '1974-01-01';
        $expectedYears = (new \DateTime())->diff(new \DateTime($datePast))->y;
        $this->assertEquals($expectedYears, YearsCalculator::calculate($datePast, date("Y-m-d")));
        $datePast = '1923-01-01';
        $expectedYears = (new \DateTime())->diff(new \DateTime($datePast))->y;
        $this->assertEquals($expectedYears, YearsCalculator::calculate($datePast, date("Y-m-d")));
    }

}
