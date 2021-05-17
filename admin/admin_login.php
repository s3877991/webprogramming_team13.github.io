<!-- Assignment 3: FULLSTACK ASSIGNMENT - Task #3: Create and develop an admin dashboard page -->

<!-- PHP code area -->
<?php
session_start();

if (isset($_POST['act'])) {
  if (isset($_POST['pass']) && $_POST['pass'] == 'P@ssW0rd') {
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
    header('location: admin_dashboard.php');
  }
  $status = 'Invalid username/password';
}
?>

<!-- HTML Code Area -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width intitial-scale=1">
  <title>Login - Shoppiverse Admin</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/admin_login.css">
</head>

<body>

  <!-- Header section -->
  <header>
    <h2>SHOPPIVERSE <span>Admin</span></h2>
  </header>

  <!-- Main section -->
  <main>
    <h1>Login</h1>

    <form method="post" action="login3.php">
      <div>
        Username<br>
        <input type="text" name="username">
      </div>
      <div>
        Password<br>
        <input type="password" name="pass">
      </div>

      <!--Error Message Area-->
      <?php
      // If users input incorrect username or password, an error message will appear
      if (isset($status)) {
        echo "<h3 class=\"error\">$status</h3>";
      }
      ?>

      <div>
        <input type="submit" name="act" value="Login">
      </div>
    </form>

  </main>

  <!-- Footer section -->
  <footer>
    <h2>by THE GANG</h2>
    <h3>Developed in 2021</h3>
  </footer>

</body>

</html>