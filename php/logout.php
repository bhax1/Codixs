<?php
    session_start();
    if (isset($_POST['logout'])) {
        // Destroy the session
        session_unset();
        session_destroy();

        // Redirect to the login page
        header("Location: index.php");
        exit();
    }
?>