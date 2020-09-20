<?php

namespace tests;

use maxlzp\codewars\RGB2HexConversion;
use PHPUnit\Framework\TestCase;

class RGB2HexConversionTest extends TestCase
{
    /**
     * @var RGB2HexConversion
     */
    private $convert;

    public function setUp(): void
    {
        $this->convert = new RGB2HexConversion();    
    }

    public function testBaseTests() {
        // assertEquals(mixed $expected, mixed $actual[, string $message = ''])
        $this->assertEquals("FFFFFF", $this->convert->rgb(255, 255, 255));
        $this->assertEquals("FFFFFF", $this->convert->rgb(255, 255, 300));
        $this->assertEquals("000000", $this->convert->rgb(0,0,0));
        $this->assertEquals("000000", $this->convert->rgb(-500,0,0));
        $this->assertEquals("9400D3", $this->convert->rgb(148, 0, 211));
    }
}
