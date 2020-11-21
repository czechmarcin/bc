<?php

namespace App\Tests;

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{

    public function testAdd()
    {
        $calculator = new Calculator();

        $this->assertEquals(3, $calculator->add(1, 2));
        $this->assertEquals(5, $calculator->add(3, 2));
    }

    public function testSubtract()
    {
        $calculator = new Calculator();

        $this->assertEquals(2, $calculator->subtract(4, 2));
        $this->assertEquals(1, $calculator->subtract(3, 2));
    }

    public function testMultiply()
    {
        $calculator = new Calculator();

        $this->assertEquals(3, $calculator->multiply(1, 3));
        $this->assertEquals(6, $calculator->multiply(3, 2));
    }

    public function testDivide()
    {
        $calculator = new Calculator();

        $this->assertEquals(0.5, $calculator->divide(1, 2));
        $this->assertEquals(5, $calculator->divide(15, 3));

        $this->expectException(\InvalidArgumentException::class);
        $calculator->divide(1, 0);
    }
}
