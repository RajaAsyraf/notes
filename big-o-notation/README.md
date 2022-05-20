# What is Big O Notation?
Big O notation is a way to describe how long and how much memory an algorithm will take to complete the execution.

## Orders of Growth
| Big O | Growth |
|---|---|
| O (1) | Constant |  
| O (log n) | Logarithmic |  
| O (n) | Linear |
| O (n log n) | Linearithmic |
| O (n2) | Quadratic |
| O (n3) | Cubic |
| O (2n) | Exponential |
| O (n!) | Factorial |
## O (1)
Time: Constant

## O (n)
Time: Linear

## O (n2)
Time: Quadratic


## O (n3)
Time: Cubic

## O (log n)
Time: Logarithmic

## O (n log n)
Time: Linearithmic
This complexity consist of:
1. O (n)
2. O (log n)
## Merge Sort & O (n log n)
Merge sort algorithm sorts an array into ascending order by recursively dividing the array into half, compare the value and merge back into a single array.
1. `mergeSort` function is O (log n) - recursively divide the array into half
2. `merge` function is 0 (n) - touch every element to compare the value
Thus, the time complexity of merge sort function is 0 (n log n).