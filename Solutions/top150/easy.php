<?php

namespace App\Solutions\top150;

require_once __DIR__ . '/../../Helpers/functions.php';

use DSA\Helpers\Functions;

class Solution
{
    public static function isPalindrome(int $x): bool
    {
        return (string) $x === strrev((string) $x);
    }

    public static function romanToInt(string $s): int
    {
        $romanNumbers = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];

        $romans = str_split($s);

        $number = 0;
        Functions::dump(array_values($romanNumbers));
        Functions::dump($romans);
        Functions::dump($romanNumbers);

        foreach ($romans as $index => $roman) {
            if (!isset($romanNumbers[$roman])) {
                Functions::dump('Must be a roman number');
                return 0;
            }

            $romanNumbers = array_values($romanNumbers);

//            if (array_search($romanNumbers) + 1 === array_search())

            $number+= $romanNumbers[$roman];
        }

        return $number;
    }
}

Functions::dump(Solution::romanToInt('VIII'));
