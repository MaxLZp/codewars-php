<?php

namespace tests;

use maxlzp\codewars\BuildAPileOfCubes;
use PHPUnit\Framework\TestCase;

class BuildAPileOfCubesTest extends TestCase
{

    /**
     * @var BuildAPileOfCubes
     */
    private $pile;

    public function setUp(): void
    {
        $this->pile = new BuildAPileOfCubes();
    }


    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function testBasics() {
        $this->revTest($this->pile->findNb(224), -1);
        $this->revTest($this->pile->findNb(225), 5);
        $this->revTest($this->pile->findNb(4183059834009), 2022);
        $this->revTest($this->pile->findNb(24723578342962), -1);
        $this->revTest($this->pile->findNb(135440716410000), 4824);
    }
}
