<?php

namespace tests;

use maxlzp\codewars\ConvertStringToCamelCase;
use PHPUnit\Framework\TestCase;

class ConvertStringToCamelCaseTest extends TestCase
{
    private $converter;

    public function setUp(): void
    {
        $this->converter = new ConvertStringToCamelCase();
    }

    /**
     * @test
     */
    public function SampleCases() {
        $this->assertEquals("theStealthWarrior", $this->converter->toCamelCase("the_stealth_warrior"), "toCamelCase('the_stealth_warrior') did not return correct value");
        $this->assertEquals("theStealthWarrior", $this->converter->toCamelCase("the-Stealth-Warrior"), "toCamelCase('the-Stealth-Warrior') did not return correct value");
    }

    /**
     * @test
     */
    public function SampleCases2() {
        $this->assertEquals("theStealthWarrior", $this->converter->toCamelCase2("the_stealth_warrior"), "toCamelCase('the_stealth_warrior') did not return correct value");
        $this->assertEquals("theStealthWarrior", $this->converter->toCamelCase2("the-Stealth-Warrior"), "toCamelCase('the-Stealth-Warrior') did not return correct value");
    }
}
