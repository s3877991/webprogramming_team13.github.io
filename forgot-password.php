<?php
// If file 'install.php' still exists, the current PHP script in this file will be terminated
if (file_exists('admin/install.php')) {
    die("You have to delete <code>'install.php'</code> file manually to activate the System!");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/header-&-footer.css">
    <link rel="stylesheet" href="css/forgot-password.css">
    <link rel="stylesheet" href="css/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
    <title>Forgot your password?</title>
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
                        <li><a href="browse-store-1.php?letter-start=All&act=Browse">by NAME</a></li>
                        <li><a href="browse-store-2.php?category=All&act=Browse">by CATEGORY</a></li>
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
        <section id="forgot-password">

            <div class="container">
                <form method="get" action="forgot-password.php">

                    <div class="label">
                        <h1>FORGOT YOUR PASSWORD?</h1>
                        <p>
                            Please enter your email address associated with your account,
                            and you will recieve an email with a link to reset your password.
                        </p>
                    </div>

                    <hr>

                    <div class="input">

                        <label for="email">Your Email</label>
                        <br>
                        <input type="email" class="text-field" name="email" placeholder="Enter your email address" required>
                        <br>
                        <input type="submit" name="login" value="Reset your password">

                    </div>

                    <hr>

                    <div class="cancel">
                        <a href="login.php">Cancel</a>
                    </div>

                </form>
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

    <script src="javascript/cookie.js"></script>
</body>

</html>