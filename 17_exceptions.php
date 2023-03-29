<?php

/* ----------- Exceptions ----------- */

/*
  PHP has an exception model similar to that of other programming languages.
  An exception can be thrown, and caught ("catched") within PHP.
  Code may be surrounded in a try block, to facilitate the catching of potential exceptions.
  Each try must have at least one corresponding catch or finally block.
*/

    function inverse($x) {
        if(!$x) {
            throw new Exception("Division by zero not allowed.");
        }
        return(1 / $x);
    }

    // echo inverse(1314);          // works.
    // echo inverse(0);             // uncaught exception.

    try {
        echo inverse(12);       // Executed, is echoed.
        echo inverse(0);        // throws an error, caught by catch block.
    }
    catch (Exception $e) {
        echo "Caught Exception: ", $e->getMessage(), ' ';
    }
    finally {
        echo "<br>This is from finally block<br>";
    }

?>
