<?php

namespace tests;

use maxlzp\codewars\WriteNumberInExpandedForm;
use PHPUnit\Framework\TestCase;

class WriteNumberInExpandedFormTest extends TestCase
{
    /**
     * @var WriteNumberInExpandedForm
     */
    private $writer;

    public function setUp(): void
    {
        $this->writer = new WriteNumberInExpandedForm();
    }

    /**
     * @test
     */
    public function testDescriptionExamples() {
        $this->assertEquals("10 + 2", $this->writer->expanded_form(12));
        $this->assertEquals("40 + 2", $this->writer->expanded_form(42));
        $this->assertEquals("70000 + 300 + 4", $this->writer->expanded_form(70304));
    }
}
