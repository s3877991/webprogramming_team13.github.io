<!-- Assignment 3: FULLSTACK ASSIGNMENT - Task #1: Create and develop an install file for admin -->

<!-- PHP code area -->
<?php
// Start the sesion
session_start();

// VALIDATE INPUTS
if (isset($_POST['install'])) {

  // Set RegEx pattern
  $username_pattern = "/^(?=.*[a-zA-Z0-9])(.{6,})$/i";
  $password_pattern = "/^(?=.*[a-zA-Z0-9])(.{8,})$/i";

  // Validate username input
  if (empty($_POST['username'])) {
    $username_error = "Please enter your username!";
  } else if (!preg_match($username_pattern, $_POST['username'])) {
    $username_error = "Your username must have at least 6 characters and include only letters and numbers!";
  }

  // Validate password inputs
  if (empty($_POST['password'])) {
    $password_error = "Please enter your password!";
  } else if (!preg_match($password_pattern, $_POST['password'])) {
    $password_error = "Your username must have at least 8 characters and include only letters and numbers!";
  }

  // Verify the password
  if (empty($_POST['verify_password'])) {
    $verify_password_error = "Please re-enter your password!";
  } else if ($_POST['verify_password'] != $_POST['password']) {
    $verify_password_error = "Please re-enter THE SAME password!";
  }

  else {
    $success = "Installation Successful! Please close the tab and delete '<code>install.php</code>' file to activate the System.";
    
  }

}
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
  <title>Install</title>
</head>

<body>

  <!-- Header section -->
  <header>
    <h2>SHOPPIVERSE <span>Admin</span></h2>
  </header>

  <!-- Main section -->
  <main>
    <div class="form">

      <p class="success">
        <?php 
        if (isset($success)) {
          echo $success;
        }
        ?>
      </P>

      <h1>Install System</h1>

      <form method="post" action="install.php">

        <div class="keyboard">
          <label for="username">Your username</label>
          <br>
          <input type="text" name="username" placeholder="Enter your username">
          <br>
          <!-- Display error message -->
          <span class="error">
            <?php
            if (isset($username_error)) {
              echo $username_error;
            }
            ?>
          </span>
        </div>

        <div class="keyboard">
          <label for="password">Your password</label>
          <br>
          <input type="password" name="password" placeholder="Enter your password">
          <!-- Display error message -->
          <span class="error">
            <?php
            if (isset($password_error)) {
              echo $password_error;
            }
            ?>
          </span>
        </div>

        <div class="keyboard">
          <label for="verify_password">VERIFY your password</label>
          <br>
          <input type="password" name="verify_password" placeholder="Re-enter your password">
          <!-- Display error message -->
          <span class="error">
            <?php
            if (isset($verify_password_error)) {
              echo $verify_password_error;
            }
            ?>
          </span>
        </div>

        <div class="submit">
          <input type="submit" name="install" value="Install">
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