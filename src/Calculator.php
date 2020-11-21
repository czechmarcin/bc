<?php

namespace App;

final class Calculator
{
    public function add($x, $y)
    {
        return $x + $y;
    }

    public function subtract($x, $y)
    {
        return $x - $y;
    }

    public function multiply($x, $y)
    {
        return $x * $y;
    }

    public function divide($x, $y)
    {
        if ($y === 0) {
            throw new \InvalidArgumentException('Cannot divide by zero');
        }

        return $x / $y;
    }
}
