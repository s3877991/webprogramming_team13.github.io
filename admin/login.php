<!-- Assignment 3: FULLSTACK ASSIGNMENT - Task #3: Create and develop an admin dashboard page -->

<!-- PHP code area -->
<?php
// Start the session
session_start();

// If file 'install.php' still exists, the current PHP script in this file will be terminated
/* if (file_exists('install.php')) {
  die("You have to delete 'install.php' file manually to activate the System!");
} */

// VALIDATE INPUTS BASED ON data from admin account data file

?>

<!-- HTML Code Area -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width initial-scale=1">
  <link rel="stylesheet" href="css/header&footer.css">
  <link rel="stylesheet" href="css/authenication-form.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
  <title>Login - Shoppiverse Admin</title>
</head>

<body>

  <!-- Header section -->
  <header>
    <h2>SHOPPIVERSE <span>Admin</span></h2>
  </header>

  <!-- Main section -->
  <main>
    <div class="form">
      <h1>Login to Dashboard</h1>

      <form method="get" action="dashboard.php">

        <div class="keyboard">
          <label for="username">Your username</label>
          <br>
          <input type="text" name="username" placeholder="Enter your username" required>
        </div>

        <div class="keyboard">
          <label for="pass">Your password</label>
          <br>
          <input type="password" name="pass" placeholder="Enter your password" required>
        </div>

        <!--Error Message Area-->
        <?php
        // If users input incorrect username or password, an error message will appear
        if (isset($status)) {
          echo "<h3 class=\"error\">$status</h3>";
        }
        ?>

        <div class="submit">
          <input type="submit" name="act" value="Login">
        </div>
      </form>
    </div>

  </main>

  <!-- Footer section -->
  <footer>
    <h2>by <span>THE GANG</span></h2>
    <h3>Developed in 2021</h3>
  </footer>

</body>

</html>