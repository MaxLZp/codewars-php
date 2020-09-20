<?php

namespace tests;

use maxlzp\codewars\SplitStrings;
use PHPUnit\Framework\TestCase;

class SplitStringsTest extends TestCase
{

    public function testBasicTests()
    {
        $split = new SplitStrings();
        $this->assertEquals(["ab", "cd", "ef"], $split->solution("abcdef"));
        $this->assertEquals(["ab", "cd", "ef", "g_"], $split->solution("abcdefg"));
        $this->assertEquals([], $split->solution(""));
    }
}
