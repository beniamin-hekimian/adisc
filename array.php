<?php

$numbers = [5, 2, 8, 1, 9];

// count(): Gets the number of elements in the array
$totalElements = count($numbers); // $totalElements = 5

// array_push(): Adds one or more elements to the end of the array
array_push($numbers, 4); // $numbers = [5, 2, 8, 1, 9, 4]

// array_pop(): Removes and returns the last element of the array (commonly called "pull")
$pulledValue = array_pop($numbers); // $pulledValue = 4, $numbers = [5, 2, 8, 1, 9]

// array_shift(): Removes and returns the first element of the array, shifting all other elements down
$shiftedValue = array_shift($numbers); // $shiftedValue = 5, $numbers = [2, 8, 1, 9]

// array_filter(): Filters elements using a callback function
$oddNumbers = array_filter($numbers, function ($value) {
    return $value % 2 !== 0;
}); // $oddNumbers = [2 => 1, 3 => 9]

// unset(): Deletes a specific element by its index key
unset($numbers[1]); // $numbers = [0 => 2, 2 => 1, 3 => 9] (removes the element at index 1)

// sort(): Sorts the array in ascending order and resets the numerical keys
sort($numbers); // $numbers = [1, 2, 9]

// array_unshift(): Prepends one or more elements to the beginning of the array
array_unshift($numbers, 10); // $numbers = [10, 1, 2, 9]

// in_array(): Checks if a specific value exists in the array
$hasNine = in_array(9, $numbers); // $hasNine = true

// array_key_exists(): Checks if the given key or index exists in the array
$hasIndexTwo = array_key_exists(2, $numbers); // $hasIndexTwo = true

// array_merge(): Merges one or more arrays together
$extraNumbers = [4, 7];
$mergedArray = array_merge($numbers, $extraNumbers); // $mergedArray = [10, 1, 2, 9, 4, 7]

// array_slice(): Extracts a slice of the array without modifying the original array
$slicedArray = array_slice($numbers, 1, 2); // $slicedArray = [1, 2]

// implode(): Joins array elements together into a single string with a delimiter
$commaString = implode(", ", $numbers); // $commaString = "10, 1, 2, 9"

// array_reverse(): Returns an array with elements in reverse order
$reversedArray = array_reverse($numbers); // $reversedArray = [9, 2, 1, 10]
