<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use src\YearsCalculator;

class YearsCalculatorTest extends TestCase
{
    public function testCalculate()
    {
        $date = '2000-01-01';
        $expectedYears = (new \DateTime())->diff(new \DateTime($date))->y;
        $this->assertEquals($expectedYears, YearsCalculator::calculate($date));
        $date = '2022-01-01';
        $expectedYears = (new \DateTime())->diff(new \DateTime($date))->y;
        $this->assertEquals($expectedYears, YearsCalculator::calculate($date));
        $date = '1974-01-01';
        $expectedYears = (new \DateTime())->diff(new \DateTime($date))->y;
        $this->assertEquals($expectedYears, YearsCalculator::calculate($date));
        $date = '1923-01-01';
        $expectedYears = (new \DateTime())->diff(new \DateTime($date))->y;
        $this->assertEquals($expectedYears, YearsCalculator::calculate($date));
    }

}
