<?php

/**
 * O(log n) - O of log n
 *
 * Binary search example
 */

$arr = [];
for ($i = 0; $i < 1024; $i++) {
    $arr[] = $i;
}
$start = 0;
$end = count($arr) - 1;
$target = 123;

function binarySearch($arr, $start, $end, $target) {
    if ($start > $end) return false;
    $midIndex = floor(($start + $end) / 2);
    if ($arr[$midIndex] === $target) return true;
    if ($arr[$midIndex] > $target) return binarySearch($arr, $start, $midIndex - 1, $target);
    else return binarySearch($arr, $midIndex + 1, $end, $target);
}

var_dump(binarySearch($arr, $start, $end, $target));
