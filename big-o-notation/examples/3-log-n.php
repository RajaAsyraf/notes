<?php

/**
 * O(log n) - O of log n
 * 
 * Recursive function
 */

logFunc(8);
function logFunc($n) {
    if ($n === 0) echo 'Done';
    $n = floor($n / 2);
    logFunc($n);
}
