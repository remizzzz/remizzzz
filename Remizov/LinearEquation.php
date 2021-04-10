<?php

namespace Remizov;
use InvalidArgumentException;

class LinearEquation
{
    function solveLinear($b, $c): array
    {
        if ($b === 0) {
            throw new RemizovException("Equation doesn't exist");
        }
        $this->X = -($b * $c);
        return [$this->X];
    }

    protected $X;
}