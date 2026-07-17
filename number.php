<?php

$number = 4.67;

// ceil(): Rounds a number UP to the nearest integer
$ceilValue = ceil($number); // $ceilValue = 5

// floor(): Rounds a number DOWN to the nearest integer
$floorValue = floor($number); // $floorValue = 4

// round(): Rounds a float to its nearest integer or specified decimal places
$roundValue = round($number); // $roundValue = 5
$roundDecimal = round($number, 1); // $roundDecimal = 4.7

// abs(): Returns the absolute (positive) value of a number
$absoluteValue = abs(-15); // $absoluteValue = 15

// min(): Finds the lowest value in a list or array
$minValue = min(5, 2, 8, 1, 9); // $minValue = 1

// max(): Finds the highest value in a list or array
$maxValue = max(5, 2, 8, 1, 9); // $maxValue = 9

// rand(): Generates a random integer between a minimum and maximum range
$randomValue = rand(1, 10); // $randomValue = (Random integer between 1 and 10, inclusive)

// pow(): Raises a base number to the power of an exponent
$powerValue = pow(2, 3); // $powerValue = 8 (2 raised to the power of 3)

// sqrt(): Returns the square root of a number
$squareRoot = sqrt(16); // $squareRoot = 4

// number_format(): Formats a number with grouped thousands and custom decimal points
$formattedNumber = number_format(1234567.89, 2, '.', ','); // $formattedNumber = "1,234,567.89"

// intdiv(): Performs integer division (returns the whole number part of a division)
$integerDivision = intdiv(10, 3); // $integerDivision = 3

// fmod(): Returns the floating-point remainder (modulo) of a division
$remainder = fmod(5.5, 2); // $remainder = 1.5

// is_nan(): Checks whether a value is "Not a Number"
$checkNan = is_nan(acos(1.01)); // $checkNan = true (invalid mathematical operation)

// is_infinite(): Checks whether a value is infinite
$checkInfinite = is_infinite(log(0)); // $checkInfinite = true
