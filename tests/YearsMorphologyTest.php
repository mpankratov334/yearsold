<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use src\YearsMorphology;

class YearsMorphologyTest extends TestCase
{
    public function testMorphology()
    {
        $this->assertEquals('год', YearsMorphology::morphology(1));
        $this->assertEquals('года', YearsMorphology::morphology(2));
        $this->assertEquals('года', YearsMorphology::morphology(4));
        $this->assertEquals('лет', YearsMorphology::morphology(5));
        $this->assertEquals('лет', YearsMorphology::morphology(11));
        $this->assertEquals('лет', YearsMorphology::morphology(12));
        $this->assertEquals('лет', YearsMorphology::morphology(13));
        $this->assertEquals('год', YearsMorphology::morphology(21));
        $this->assertEquals('года', YearsMorphology::morphology(22));
        $this->assertEquals('лет', YearsMorphology::morphology(25));
        $this->assertEquals('лет', YearsMorphology::morphology(100));
        $this->assertEquals('год', YearsMorphology::morphology(101));
        $this->assertEquals('лет', YearsMorphology::morphology(111));
        $this->assertEquals('лет', YearsMorphology::morphology(112));
        $this->assertEquals('лет', YearsMorphology::morphology(115));
    }
}
