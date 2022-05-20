<?php

$array = [1, 23, 31, 41, 12, 15, 55];
$result = mergeSort($array);
print_r($result);

function mergeSort($array) {
    if (count($array) < 2) {
        return $array;
    }

    $middleIndex = floor(count($array) / 2);
    $leftArray = array_slice($array, 0, $middleIndex);
    $rightArray = array_slice($array, $middleIndex, count($array) - count($leftArray));
    
    return merge(mergeSort($leftArray), mergeSort($rightArray));
}

function merge($leftArray, $rightArray) {

    $resultArray = [];
    $leftIndex = 0;
    $rigthIndex = 0;

    while($leftIndex < count($leftArray) && $rigthIndex < count($rightArray)) {
        if ($leftArray[$leftIndex] < $rightArray[$rigthIndex]) {
            $resultArray[] = $leftArray[$leftIndex];
            $leftIndex += 1;
        } else {
           $resultArray[] = $rightArray[$rigthIndex];
           $rigthIndex += 1; 
        }
    }

    return array_merge(array_merge($resultArray, array_slice($leftArray, $leftIndex)), array_slice($rightArray, $rigthIndex));
}