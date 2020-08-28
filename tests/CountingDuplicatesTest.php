<?php

namespace tests;

use maxlzp\codewars\CountingDuplicates;
use PHPUnit\Framework\TestCase;

class CountingDuplicatesTest extends TestCase
{
    /**
     * @var CountingDuplicates
     */
    private $counter;

    public function setUp(): void
    {
        $this->counter = new CountingDuplicates();
    }

    public function testFixedTests() {
        $this->assertEquals(0, $this->counter->duplicateCount(""));
        $this->assertEquals(0, $this->counter->duplicateCount("abcde"));
        $this->assertEquals(2, $this->counter->duplicateCount("aabbcde"));
        $this->assertEquals(2, $this->counter->duplicateCount("aabBcde"), "should ignore case");
        $this->assertEquals(1, $this->counter->duplicateCount("Indivisibility"));
        $this->assertEquals(2, $this->counter->duplicateCount("Indivisibilities"), "characters may not be adjacent");
    }
}
