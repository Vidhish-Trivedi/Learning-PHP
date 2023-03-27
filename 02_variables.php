<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

// echo true ---> 1
// var_dump(true) ---> bool(true)

$name = "John";
$age = 10;
$myFloat = 3245.23;
$isOn = true;

echo $name;
echo $age;
echo $myFloat;
echo $isOn;

// No format string when using '' , concat variables with the [  .  ] operator.
// echo $name . ' is ' . $age . ' years old';

// Use ""
echo "$name is $age years old";         // {} parantheses are deprecated.

// Arithmetic.

echo 5 + 10;
echo '5' + '10';        // Converts to int --> 15, does not concatenate strings.

// constants
define('HOST', 'localhost');        // (var_name, var_value)
define('DB_NAME', 'db_name');        // (var_name, var_value)

echo HOST;

?>
