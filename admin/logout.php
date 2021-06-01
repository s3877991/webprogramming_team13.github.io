<?php
session_start();

// If file 'install.php' still exists, the current PHP script in this file will be terminated
if (file_exists('install.php')) {
    die("You have to delete <code>'install.php'</code> file manually to activate the System");
}

// this page clears login session when user wants to log out
if (isset($_SESSION['username'])) {
    unset($_SESSION['username']);

    // redirects to login.php
    header("location: login.php");
    exit();
}
