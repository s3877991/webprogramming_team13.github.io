<?php
    session_start();

    // this page clears login session when user wants to log out
    if (isset($_SESSION['username'])) {
        unset($_SESSION['username']);

        // redirects to login.php
        header("location: login.php");
        exit();
    }
?>