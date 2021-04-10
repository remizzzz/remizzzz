<?php

use PHPUnit\Framework\TestCase;
use Remizov\QuadraticEquation;
use Remizov\RemizovException;

class QuadraticTest extends TestCase
{
    public function testSquare()
    {
        $squareEx = new QuadraticEquation();
        $this->expectException(RemizovException::class);
        $this->expectExceptionMessage("Invalid quadratic eq: discriminant_sq is less than 0");
        $squareEx->solve(4, 0, 8);
        $squareEx->solve(4, 2, 1);
    }

    public function testSquare2()
    {
        $square = new QuadraticEquation();
        $this->assertEquals([0.2, 0.2], $square->solve(-3, 0, 75));
        $this->assertEquals([-27.0], $square->solve(0, 3, 9));
        $this->assertEquals([ -0.3333333333333333, 0.3333333333333333], $square->solve(1, 6, 9));
    }
}