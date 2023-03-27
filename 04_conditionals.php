<?php

/* ---- Conditionals & Operators ---- */
/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to   (values match)
  === Identical to  (values and types match)
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */
/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 16;

if($age >= 18){
    echo "Can Vote";
}
else if($age >= 15){
    echo "You are ${age} years old";
}
else{
    echo "Cannot Vote";
}

date_default_timezone_set("UTC");
$hours = date("H");      // gets the hours from current time.

echo $hours;

// empty(arr_name);         // returns true if arr_name is empty, else false.

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

// $posts = ["First Post", "Second Post"];
$posts = [];

echo !empty($posts) ? $posts[0] : "No Posts";       // can use : null when we don't need NULL value;

/* -------- Switch Statements ------- */

$favColor = "red";

switch ($favColor) {
    case 'red':
        # code...
        echo 1;
        break;
    case 'blue':
        # code...
        echo 2;
        break;
    default:
        echo 3;
        # code...
        break;
}

?>
