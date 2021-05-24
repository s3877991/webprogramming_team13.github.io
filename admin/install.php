<!-- Assignment 3: FULLSTACK ASSIGNMENT - Task #1: Create and develop an install file for admin -->

<!-- PHP code area -->
<?php
// Set error to avoid saving data with invalid input format
$errors = 0;

// Set RegEx pattern
$username_pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(.{6,})$/i";
$password_pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(.{8,})$/i";

// VALIDATE INPUTS
if (isset($_POST['install'])) {

  // Validate username input
  if (empty($_POST['username'])) {
    $username_error = "Please enter your username!";
    $errors++;
  } else if (!preg_match($username_pattern, $_POST['username'])) {
    $username_error = "Your username must have at least 6 characters and include only letters and numbers!";
    $errors++;
  }

  // Validate password input
  if (empty($_POST['password'])) {
    $password_error = "Please enter your password!";
    $errors++;
  } else if (!preg_match($password_pattern, $_POST['password'])) {
    $password_error = "Your username must have at least 8 characters and include only letters and numbers!";
    $errors++;
  }

  // Verify the password
  if (empty($_POST['verify_password'])) {
    $verify_password_error = "Please re-enter your password!";
    $errors++;
  } else if ($_POST['verify_password'] != $_POST['password']) {
    $verify_password_error = "Please re-enter THE SAME password!";
    $errors++;
  }

  // If all inputs are valid, the success message will be displayed and the input data will be saved in an external file outside the root
  if ($errors == 0) {

    // Display success message
    $success = "Installation Successful! Please close the tab and delete <code>install.php</code> file to activate the System.";

    // Password musn't be saved in plain text. Instead, it must be saved in hashed text.
    $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Add a new file outside the root to store admin account data. I will use CSV file instead of .txt file
    $file_open = fopen("../admin_account.csv", "a");

    // Update data
    $admin_account_data = array(
      'username' => $_POST['username'],
      'password' => $hashed_password
    );
    fputcsv($file_open, $admin_account_data);

    $_POST['username'] = '';
    $hashed_password = '';

    fclose($file_open);
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