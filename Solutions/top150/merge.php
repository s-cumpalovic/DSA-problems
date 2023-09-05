<?php

namespace App\Solutions\top150;

require_once __DIR__ . '/../../Helpers/functions.php';

use DSA\Helpers\Functions;

class Solution
{
    public function merge(array &$nums1, int $m, array $nums2, int $n): void
    {
        if ($m < 0 || $n < 0 || count($nums1) < $m + $n) {
            return;
        }

        $i = $m - 1;
        $j = $n - 1;
        $k = $m + $n - 1;

        while ($i >= 0 && $j >= 0) {
            if ($nums1[$i] > $nums2[$j]) {
                $nums1[$k--] = $nums1[$i--];
            } else {
                $nums1[$k--] = $nums2[$j--];
            }
        }

        while ($j >= 0) {
            $nums1[$k--] = $nums2[$j--];
        }
    }
}

$nums1 = [1,2,3,0,0,0];
$m = 3;
$nums2 = [2,5,6];
$n = 3;

$solution = new Solution();
$solution->merge($nums1, $m, $nums2, $n);
Functions::dump($solution->getNums1());