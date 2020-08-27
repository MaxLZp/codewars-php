<?php

namespace tests;

use maxlzp\codewars\PrinterErrors;
use PHPUnit\Framework\TestCase;

class PrinterErrorsTest extends TestCase
{
    /**
     * @var PrinterErrors
     */
    private $printerErrors;

    public function setUp(): void
    {
        $this->printerErrors = new PrinterErrors();
    }

    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function testBasics() {
        $s="aaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbmmmmmmmmmmmmmmmmmmmxyz";
        $this->revTest($this->printerErrors->printerError($s), "3/56");
        $s = "kkkwwwaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbmmmmmmmmmmmmmmmmmmmxyz";
        $this->revTest($this->printerErrors->printerError($s), "6/60");
        $s = "kkkwwwaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbmmmmmmmmmmmmmmmmmmmxyzuuuuu";
        $this->revTest($this->printerErrors->printerError($s) , "11/65");
    }
}
