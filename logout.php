<?php
    session_start();

    // this page clears login session when user wants to log out
    if (isset($_SESSION['email'])) {
        unset($_SESSION['email']);

        // redirects to index.php
        header("Location: http://localhost:8000/login.php");
        exit();
    }
?>