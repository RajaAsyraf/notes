<?php

/**
 * O(log n) - O of log n
 *
 * Iterative & Non-recursive example
 */

logFunc(8);
function logFunc($n) {
    while($n > 1) {
        $n = floor($n / 2);
    }
}

// O(log 8) = O(log(2)8) = 2(?) = 8
// 2 x 2 x 2 = 8
// 1 + 1 + 1 = 3
