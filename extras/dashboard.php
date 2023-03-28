<?php
    session_start();        // Must be called before accessing any session data

    if(isset($_SESSION["username"])) {
        echo '<h1> Welcome ' . $_SESSION['username'] . "</h1>";
    }
    else{
        echo "<h1>Welcome Guest</h1>";
        echo "<a href = '/php-crash/14_sessions.php'>Home</a>";
    }

?>
