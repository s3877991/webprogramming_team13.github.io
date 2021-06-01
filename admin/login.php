<!-- Assignment 3: FULLSTACK ASSIGNMENT - Task #3: Create and develop an admin dashboard page -->

<!-- PHP code area -->
<?php
// Start the session
session_start();

// If file 'install.php' still exists, the current PHP script in this file will be terminated
if (file_exists('install.php')) {
  die("You have to delete <code>'install.php'</code> file manually to activate the System!");
}

// VALIDATE INPUTS BASED ON DATA FROM ADMIN ACCOUNT DATA FILE
if (isset($_POST['login'])) {

  // Set variable for input value
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Get data from CSV file. And those data will be collected in a multidimensional array
  $file_name = '../admin_account.csv';
  $file_pointer = fopen($file_name, 'r');
  $header_row = fgetcsv($file_pointer);
  $admins = [];
  while ($row = fgetcsv($file_pointer)) {
    $i = 0;
    $admin = [];
    foreach ($header_row as $col_name) {
      $admin[$col_name] = $row[$i];
      $i++;
    }
    $admins[] = $admin;
  }

  // If the inputted username and password match with the username and password stored in data file,
  // the user will be redirected to dashboard page.
  foreach ($admins as $admin) {

    if ($admin['Username'] == $username && password_verify($password, $admin['Password'])) {

      // create a unique id value and pair with username value to prevent modification
      $uniqid = uniqid();

      // Store the pair of username  on the server for later validation
      // Note: the location is outside of document root to avoid strangers accessing 
      file_put_contents("../$username", $uniqid);

      // Redirect to dashboard page and the username is saved on server
      $_SESSION['username'] = $_POST['username'];
      header('location: dashboard.php');

      // Otherwise, an error message appears. 
    } else if ($admin['Username'] !== $username || !password_verify($password, $admin['Password'])) {
      $status = "Your username or password is INCORRECT!";
    }
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

      <form method="post" action="login.php">

        <div class="keyboard">
          <label for="username">Your username</label>
          <br>
          <input type="text" name="username" placeholder="Enter your username" required>
        </div>

        <div class="keyboard">
          <label for="password">Your password</label>
          <br>
          <input type="password" name="password" placeholder="Enter your password" required>
        </div>

        <!--Error Message Area-->
        <h3 class="login error">
          <?php
          // If users input incorrect username or password, an error message will appear
          if (isset($status)) {
            echo $status;
          }
          ?>
        </h3>

        <div class="submit">
          <input type="submit" name="login" value="Login">
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