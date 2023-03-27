<?php
/* ----------- Arrrays ----------- */
/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

// Simple array
$nums = [1, 4, 3324, -45, 0, 11];
$fruits = array('apple', 'orange', 'mango');

// print_r($nums);
// var_dump($fruits);

echo $fruits[1];        // 0-based indexing

// Associative array, like dictionary.
$colors = [
    1 => "red",
    4 => "blue",
    19 => "yellow"
];

$colorsDict = [
    "fav" => "red",
    "ok" => "blue",
    "maybe" => "yellow"
];

echo $colors[19];
echo $colorsDict["ok"];

// Similar to objects.
$person = [
    "fname" => "John",
    "lname" => "Smith",
    "age" => 15
];

echo $person["lname"], $person["age"];


// Multidimensional Arrays.

$people = [
    [
        "fname" => "John1",
        "lname" => "Smith1",
        "age" => 15
    ],
    [
        "fname" => "John2",
        "lname" => "Smith2",
        "age" => 25
    ],
    [
        "fname" => "John3",
        "lname" => "Smith3",
        "age" => 35
    ]    
];

echo $people[2]["fname"];

// Convert multi-dimensional arrays to an array of json objects.

$jsonArray = json_encode($people);
var_dump($jsonArray);

// Similarly, for converting array of json objects to array of associative arrays, we can use json_decode.
?>
