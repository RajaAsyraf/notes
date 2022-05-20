<?php

/**
 * O(n³) - O of n cubed
 * Same variable (n) with 3 nested loop
 */

cube(4);
function cube($n) {
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            for ($k = 0; $k < $n; $k++) {
                printf($i);
                printf($j);
                printf($k);
            }
        }
    }
}
