<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// count(arr_name) returns the length of arr_name.

for($i = 0; $i < 10; $i++){
    echo $i;
    echo "<br>";        // Equivalent to newline.
}


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

$j = 0;
while($j < 5){
    echo $j;
    echo "<br>";
    $j++;
}

/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

$k = 10;
do{
    echo $k;
    echo "<br>";
    $k++;
}
while($k < 10);

/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

$posts = ["first", "2nd", "third"];
// foreach ($arr as $element) {
//     # code...
// }

foreach ($posts as $key => $value) {            // for associative arrays /  $key can also be used as index.
    echo "$key: $value" . "<br>";
}


?>
