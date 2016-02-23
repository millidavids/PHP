<?php

class Math {

    const ADD = 'add';
    const SUBTRACT = 'subtract';
    const MULTIPLY = 'multiply';
    const DIVIDE = 'divide';

    public function add($x, $y, ...$zs) {
        return $this->doOperation(self::ADD, $x, $y, $zs);
    }

    public function subtract($x, $y, ...$zs) {
        return $this->doOperation(self::SUBTRACT, $x, $y, $zs);
    }

    public function multiply($x, $y, ...$zs) {
        return $this->doOperation(self::MULTIPLY, $x, $y, $zs);
    }

    public function divide($x, $y, ...$zs) {
        return $this->doOperation(self::DIVIDE, $x, $y, $zs);
    }

    private function doOperation($op, $x, $y, $zs) {
        if ($op == self::ADD) {
            return $x + $y + array_sum($zs);
        } elseif ($op == self::SUBTRACT) {
            return $x - $y - array_sum($zs);
        } elseif ($op == self::MULTIPLY) {
            return $x * $y * array_product($zs);
        } elseif ($op == self::DIVIDE) {
            return $x / $y / array_product($zs);
        }
    }
}
