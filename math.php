<?php

class Math {
    public function add($x, $y, ...$zs) {
        return $x + $y + array_sum($zs);
    }

    public function subtract($x, $y, ...$zs) {
        return $x - $y - array_sum($zs);
    }

    public function multiply($x, $y, ...$zs) {
        return $x * $y * array_product($zs);
    }

    public function divide($x, $y, ...$zs) {
        return $x / $y / array_product($zs);
    }
}
