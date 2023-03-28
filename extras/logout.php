<?php
    // To access session variables.
    session_start();

    // To destroy session.
    session_destroy();

    // Redirect to say, home.
    header("Location: /php-crash/14_sessions.php");
?>
