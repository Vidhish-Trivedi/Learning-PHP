<?php

// Global variable.
$y = 12;

// Define a function.
// Note that functions have their own scope.
function registerUser() {
    echo "Inside function <br>";
    global $y;                  // To access global variables
    $x = 5;                     // Local variable.
    echo "User Registered!" . "<br>" . $y . "<br>" . $x . "<br>";
    $y++;
    echo "Leaving function <br>";
};

// Call to a function.
registerUser();

echo $y . "<br>";
echo $x . "<br>";       // gives Undefined variable error.

echo "----------------------------------------------------------------------------------------------- <br>";

// Function with an argument.
function displayEmail($user) {
    echo $user["email"], "<br>";
};

$u1 = [
    "fname" => "John",
    "lname" => "Smith",
    "email" => "jsrox@abc.xyz",
    "age" => 25
];

// Passing $u1 as a parameter.
displayEmail($u1);

echo "----------------------------------------------------------------------------------------------- <br>";

// Function with a return value and default value(s) of arguments.
function add($a = 1, $b = 1){
    return($a + $b);
}

echo add(4, "34"), "<br>";
echo add(4, 3), "<br>";
echo add(), "<br>";
echo add(5), "<br>";

echo "----------------------------------------------------------------------------------------------- <br>";

// Anonymous functions.
$subtract = function($a = 0, $b = 0){
    return($a - $b);
};

echo $subtract(10, 3), "<br>";

echo "----------------------------------------------------------------------------------------------- <br>";

// Arrow functions.
$multiply = fn($a = 1, $b = 1) => $a * $b;          // Paranthesis and return are not required for single-line functions.

echo $multiply(4, 2.5), "<br>";

?>


