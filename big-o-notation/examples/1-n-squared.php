<?php

/**
 * O(n²) - O of n square
 * Same variable (n) with 2 nested loop
 */

square(4);
function square($n) {
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            printf($i);
            printf($j);
        }
    }
}