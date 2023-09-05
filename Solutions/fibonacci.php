<?php

namespace DSA\Solutions;
require_once __DIR__ . '/../Helpers/functions.php';

use DSA\Helpers\Functions;

class Fibonacci {
    public static function calculateNumber(int $number): float
    {
        if ($number < 3) {
            return 1;
        }

        return self::calculateNumber($number - 1) + self::calculateNumber($number - 2);
    }
}

Functions::dump(Fibonacci::calculateNumber(5));
