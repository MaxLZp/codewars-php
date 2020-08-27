<?php

namespace tests;

use maxlzp\codewars\SeriesSum;
use PHPUnit\Framework\TestCase;

class SeriesSumTest extends TestCase
{
    /**
     * @var SeriesSum
     */
    private $seriesSum;

    public function setUp(): void
    {
        $this->seriesSum = new SeriesSum();
    }

    /**
     * @test
     */
    public function testSeries_sum()
    {
        $this->assertSame('1.00', $this->seriesSum->series_sum(1));
        $this->assertSame('1.25', $this->seriesSum->series_sum(2));
        $this->assertSame('1.39', $this->seriesSum->series_sum(3));
        $this->assertSame('1.49', $this->seriesSum->series_sum(4));
    }
}
