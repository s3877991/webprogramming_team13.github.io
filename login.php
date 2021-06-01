<?php
session_start();

// If file 'install.php' still exists, the current PHP script in this file will be terminated
if (file_exists('admin/install.php')) {
    die("You have to delete <code>'install.php'</code> file manually to activate the System!");
}


if (isset($_SESSION["email"])) {
    header('location: user-info.php');
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $password = $email_temp = $password_temp = "";
    $errors = 0;
    if (empty($_POST["email"]) || empty($_POST["password"])) {
        $errors++;
        $status = "Please do not leave any fields empty!";
    } else {
        $email_temp = validate_input($_POST["email"]);
        $password_temp = validate_input($_POST["password"]);
        if (file_exists("../users.csv")) {
            $file = fopen("../users.csv", "r");
            while (($data = fgetcsv($file)) !== FALSE) {
                $email_data = $data[0];
                $password_data = $data[12];
                if ($email_temp == $email_data && password_verify($password_temp, $password_data)) {
                    $email = $email_temp;
                    $password = $password_temp;
                    break;
                } else {
                    $status = "Your email or password is INCORRECT!";
                }
            }
        }
    }
    if ($email != "" && $password != "") {
        $_SESSION["email"] = $email;
        header('location: user-info.php');
    }
}

function validate_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/header-&-footer.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
    <title>Log In</title>
</head>

<body>
    <!--Header section with navigation bar-->
    <header>
        <nav>
            <!--Logo of the website name-->
            <div id="logo"><a href="index.php">SHOPPIVERSE</a></div>

            <!--When the website is used in small-screen devices, the navigation icon appears-->
            <label for="dropdown-main" class="toggle" id="main-toggle">
                <span class="navigation-icon"></span>
            </label>
            <input type="checkbox" id="dropdown-main">

            <!--Navigation-->
            <ul class="menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="aboutus.php">ABOUT US</a></li>
                <li><a href="fees.php">FEES</a></li>
                <li>
                    <!--This item has a sub menu. When the mouse cursor point on this item, the sub-menu appears-->
                    <label for="dropdown-sub" class="toggle">STORES <span class="material-icons">expand_more</span></label>
                    <a href="">STORES <span class="material-icons">expand_more</span></a>
                    <input type="checkbox" id="dropdown-sub">
                    <ul class="sub-menu">
                        <li><a href="browse-store-1.php">by NAME</a></li>
                        <li><a href="browse-store-2.php">by CATEGORY</a></li>
                    </ul>
                </li>
                <li><a href="contactus.php">CONTACT US</a></li>
                <li><a href="faqs.php">FAQS</a></li>
                <li><a class="active" href="login.php">MY ACCOUNT</a></li>
            </ul>
        </nav>
    </header>

    <!--Main content-->
    <main>
        <section id="log-in">
            <div class="flex-container">

                <div class="image">
                    <img src="images/shopping-cart.png" alt="a cart with some stuffs">
                </div>

                <div class="form">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                        <div class="input">
                            <label for="email" class="label">Your Email</label>
                            <br>
                            <input type="email" class="text-field" name="email" id="email" placeholder="Enter your email address" required>
                        </div>

                        <div class="input">
                            <label for="password" class="label">Your Password</label>
                            <br>
                            <input type="password" class="text-field" name="password" id="password" placeholder="Enter your password" required>
                        </div>

                        <div class="error">
                            <p id="error-message">
                                <?php
                                if (isset($status)) {
                                    echo $status;
                                }
                                ?>
                            </p>
                        </div>

                        <div class="action-1">
                            <input type="submit" name="login" value="Log In">
                        </div>

                        <div class="action-2">
                            <a href="forgot-password.php">Forgot your password?</a>
                        </div>

                        <hr>

                        <div class="action-3">
                            <p>Are you new to Shoppiverse?</p>
                            <a href="register.php">Create New Account</a>
                        </div>

                    </form>
                </div>

            </div>
        </section>
    </main>

    <!--Footer section with navigation bar-->
    <footer>
        <a href="copyright.php">Copyright</a>
        <a href="tos.php">Terms of Service</a>
        <a href="privacy-policy.php">Privacy Policy</a>
        <div id="brief-description">
            <em>
                <h3>by <strong>THE GANG</strong></h3>
                <p>Developed in 2021</p>
            </em>
        </div>
    </footer>

    <!--Cookie-->
    <div class="cookie-consent">
        <h3>I USE COOKIES</h3>
        <p>My website uses cookies necessarily for its basic functioning. By continuing browsing, you consent to my use of cookies and other technologies.</p>
        <button class="cookie-btn">I understand</button>
        <a href="#">Learn more</a>
    </div>

    <!--Link to external JavaScript file-->
    <script src="javascript/cookie.js"></script>
</body>

</html>