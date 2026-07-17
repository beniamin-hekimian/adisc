<?php

$text = "hello world from php";

// str_contains(): Checks if a string contains a specific substring
$containsWord = str_contains($text, "world"); // $containsWord = true

// str_starts_with(): Checks if a string begins with a specific substring
$startsWithHello = str_starts_with($text, "hello"); // $startsWithHello = true

// str_ends_with(): Checks if a string ends with a specific substring
$endsWithPhp = str_ends_with($text, "php"); // $endsWithPhp = true

// strtoupper(): Converts all characters in a string to uppercase
$upperText = strtoupper($text); // $upperText = "HELLO WORLD FROM PHP"

// strtolower(): Converts all characters in a string to lowercase
$lowerText = strtolower($upperText); // $lowerText = "hello world from php"

// ucwords(): Capitalizes the first character of each word in a string
$upperWordText = ucwords($text); // $upperWordText = "Hello World From Php"

// strlen(): Returns the length (number of characters) of a string
$length = strlen($text); // $length = 20

// str_replace(): Replaces all occurrences of a search string with a replacement string
$replacedText = str_replace("php", "coding", $text); // $replacedText = "hello world from coding"

// substr(): Returns a portion of a string specified by the start position and length
$part = substr($text, 6, 5); // $part = "world" (starts at index 6, takes 5 characters)

// strpos(): Finds the index position of the first occurrence of a substring
$position = strpos($text, "from"); // $position = 12

// explode(): Splits a string into an array of strings by a specific delimiter
$wordsArray = explode(" ", $text); // $wordsArray = ["hello", "world", "from", "php"]

// trim(): Removes whitespace (or specified characters) from the beginning and end of a string
$paddedText = "  hello  ";
$cleanText = trim($paddedText); // $cleanText = "hello"

// str_repeat(): Repeats a string a specified number of times
$repeatedText = str_repeat("hi ", 3); // $repeatedText = "hi hi hi "
