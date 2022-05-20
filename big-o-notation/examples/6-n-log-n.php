<?php

/**
 * O(n log n) - O of n log n
 *
 */

$n = 4;
nLogNFunc($n);

function nLogNFunc($n) {
    $y = $n;
    while ($n > 1) {
        $n = floor($n / 2);
        for ($i = 0; $i <= $y; $i++) {
            var_dump($i);
        }
    }
}
