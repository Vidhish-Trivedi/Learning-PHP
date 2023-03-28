<?php

function myPrint($e) {
    echo $e . "<br>";
}

$fruits = ["apple", "orange", "mango"];

// Length of an array.
myPrint(count($fruits));

myPrint(var_dump((in_array("apple", $fruits))));       // Check if an element is in an array, returns true/false

// Add to an array;
$fruits[] = "banana";       // Add to end.
array_push($fruits, "grape", "strawberry");         // Add multiple values to the end.

array_unshift($fruits, "pear", "guava");            // Add multiple values to the beginning.

print_r($fruits);
echo "<br>";

array_pop($fruits);                                 // Removes element from the end of array.

print_r($fruits);
echo "<br>";

array_shift($fruits);                               // Removes element from the beginning of array.

print_r($fruits);
echo "<br>";

unset($fruits[2]);                                  // Removes element at specific index, and the index also.

print_r($fruits);
echo "<br>";

$chunkedArr = array_chunk($fruits, 2);              // Gives an array of arrays, each of which is a subarray of the original with specified length.

print_r($chunkedArr);
echo "<br>";

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = [7, 8, 9];

$arr4 = array_merge($arr1, $arr2, $arr3);           // Concatenate multiple arrays.

print_r($arr4);
echo "<br>";

// Spread operator.

$arr5 = [...$arr2, ...$arr1];

print_r($arr5);
echo "<br>";

// Combine 2 arrays --->  array of key (from $a) - value (from b) pairs.
$a = ["green", "red", "yellow"];
$b = ["guava", "apple", "banana"];

$c = array_combine($a, $b);

print_r($c);
echo "<br>";

$keys = array_keys($c);

print_r($keys);
echo "<br>";

$values = array_values($c);

print_r($values);
echo "<br>";

// Flip the key-value pairs in an array.
$d = array_flip($c);

print_r($d);
echo "<br>";

// Create a range.
$nums = range(1, 20);           // Returns an array, inclusive range.

print_r($nums);
echo "<br>";

// Map
$twiceNums = array_map(function($e) {
    return($e * 2);
}, $nums);

$stringNums = array_map(function($e) {
    return("Num: $e");
}, $nums);

print_r($twiceNums);
echo "<br>";

print_r($stringNums);
echo "<br>";

// Filter
$lt10 = array_filter($nums, fn($e) =>
    ($e < 10)
);

print_r($lt10);
echo "<br>";

// Reduce
$s = array_reduce($nums, fn($e1, $e2) => 
    ($e1 + $e2)
);

print_r($s);
echo "<br>";

?>
