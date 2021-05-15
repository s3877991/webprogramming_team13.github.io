<?php
    // Prevent unauthenicated users as well as hackers from logging in to dashboard
    session_start();
    if (!isset($_SESSION('LoggedIn'))) {
        header('location: install.php');
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width intitial-scale=1">
    <title>Dashboard</title>
</head>

<body>
    <h1>Dashboard</h1>
</body>

</html>