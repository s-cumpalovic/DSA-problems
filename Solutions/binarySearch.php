<?php

namespace DSA\Solutions;
require_once __DIR__ . '/../Helpers/functions.php';

use DSA\Helpers\Functions;

class Binary
{
    public static function search(mixed $value, array $array): bool
    {
        $start = 0;
        $end = count($array) - 1;

        while ($start <= $end) {
            $middle = floor(($start + $end) / 2);

            if ($array[$middle] == $value) {
                return true;
            } else if ($array[$middle] < $value) {
                $start = $middle + 1;
            } else {
                $end = $middle - 1;
            }
        }

        return false;
    }
}

$intArray = [];

for ($i = 0; $i <= 10000000; $i++) {
    $intArray[] = $i;
}

$binary = new Binary();


Functions::dump($binary::search(123134, $intArray));

