<!-- Assignment 3: FULLSTACK ASSIGNMENT - Task #3: Create and develop an admin dashboard page -->

<!-- PHP code area -->
<?php
  session_start();

  if (isset($_POST['act'])) {
    $pass = $_POST['pass'];
    $hash = file_get_contents('../pass.txt');
    if (password_verify($pass, $hash)) {
      // create a name/uniq value pair to prevent modification
      $username = $_POST['username'];
      $uniqid = uniqid();

      // store the pair on the server for later validation
      // note: the location is outside of document root
      file_put_contents("../$username", $uniqid);

      // create a cookie that expires after 7 days
      setcookie('loggedin_name', $username, time() + 60 * 60 * 24 * 7);
      setcookie('uniqid', $uniqid, time() + 60 * 60 * 24 * 7);
      $_SESSION['username'] = $_POST['username'];
      header('location: dashboard.php');
    }
    $status = 'Your email or password is INCORRECT';
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

      <form method="get" action="dashboard.php">

        <div class="keyboard">
          <label for="username">Your username</label>
          <br>
          <input type="text" name="username" placeholder="Enter your username">
        </div>

        <div class="keyboard">
          <label for="pass">Your password</label>
          <br>
          <input type="password" name="pass" placeholder="Enter your password">
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