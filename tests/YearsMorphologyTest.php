<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use App\YearsMorphology;
use Dotenv\Dotenv;



class YearsMorphologyTest extends TestCase
{
    public function testMorphology()
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/..');
        $dotenv->load();

        $this->assertEquals($_ENV['RuSUFFIX_ONE_YEAR'], YearsMorphology::toMorphology(1));
        $this->assertEquals($_ENV['RuSUFFIX_FEW_YEARS'], YearsMorphology::toMorphology(2));
        $this->assertEquals($_ENV['RuSUFFIX_FEW_YEARS'], YearsMorphology::toMorphology(4));
        $this->assertEquals($_ENV['RuSUFFIX_YEARS'], YearsMorphology::toMorphology(5));
        $this->assertEquals($_ENV['RuSUFFIX_YEARS'], YearsMorphology::toMorphology(11));
        $this->assertEquals($_ENV['RuSUFFIX_YEARS'], YearsMorphology::toMorphology(12));
        $this->assertEquals($_ENV['RuSUFFIX_YEARS'], YearsMorphology::toMorphology(13));
        $this->assertEquals($_ENV['RuSUFFIX_ONE_YEAR'], YearsMorphology::toMorphology(21));
        $this->assertEquals($_ENV['RuSUFFIX_FEW_YEARS'], YearsMorphology::toMorphology(22));
        $this->assertEquals($_ENV['RuSUFFIX_YEARS'], YearsMorphology::toMorphology(25));
        $this->assertEquals($_ENV['RuSUFFIX_YEARS'], YearsMorphology::toMorphology(100));
        $this->assertEquals($_ENV['RuSUFFIX_ONE_YEAR'], YearsMorphology::toMorphology(101));
        $this->assertEquals($_ENV['RuSUFFIX_YEARS'], YearsMorphology::toMorphology(111));
        $this->assertEquals($_ENV['RuSUFFIX_YEARS'], YearsMorphology::toMorphology(112));
        $this->assertEquals($_ENV['RuSUFFIX_YEARS'], YearsMorphology::toMorphology(115));
    }
}
