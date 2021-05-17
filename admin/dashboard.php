<!-- Assignment 3: FULLSTACK ASSIGNMENT - Task #3: Create and develop an admin dashboard page -->

<!-- PHP code area -->
<?php
// Prevent unknown users as well as hackers from logging in to dashboard
/* session_start();

if (!isset($_SESSION['username'])) {
    // check cookie
    if (isset($_COOKIE['loggedin_name'])) {
        $name = $_COOKIE['loggedin_name'];
        // check if the cookie is valid one
        if (file_exists("../$name")) {
            $val = file_get_contents("../$name");
            if ($_COOKIE['uniqid'] == $val) {
                $_SESSION['username'] = $_COOKIE['loggedin_name'];
            }
        }
    }
}

if (!isset($_SESSION['username'])) {
    header('location: login.php');
} */
?>

<!-- HTML code area -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width intitial-scale=1">
    <link rel="stylesheet" href="css/header&footer.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
    <title>Dashboard - Shoppiverse Admin</title>
</head>

<body>

    <!-- Header section -->
    <header>
        <h2>SHOPPIVERSE <span>Admin</span></h2>
    </header>

    <!-- Main section -->
    <main>
        <h1>DASHBOARD</h1>
    </main>

    <!-- Footer section -->
    <footer>
    <h2>by <span>THE GANG<span></h2>
    <h3>Developed in 2021</h3>
    </footer>

</body>

</html>