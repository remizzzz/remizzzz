<?php

use PHPUnit\Framework\TestCase;
use Remizov\LinearEquation;
use Remizov\RemizovException;

class LinearTest extends TestCase
{
    public function testLine()
    {
        $line = new LinearEquation();
        $this->assertEquals([-432], $line->solveLinear(6, 72));
        $this->assertEquals([1], $line->solveLinear(-1, 1));
    }

    public function testLine2()
    {
        $line = new LinearEquation();
        $this->expectException(RemizovException::class);
        $this->expectExceptionMessage("Equation doesn't exist");
        $line->solveLinear(0, -7);
        $line->solveLinear(0, 2);
    }
}