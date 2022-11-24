<?php

use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass Calculator
 */
class CalculatorTest extends TestCase
{
    /**
     * @covers add
     */
    public function test_add()
    {
        $this->assertEquals(5, Calculator::add(2, 3));
    }
}
