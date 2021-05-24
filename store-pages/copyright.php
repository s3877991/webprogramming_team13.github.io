<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/header-&-footer.css">
    <link rel="stylesheet" href="css/generic-text.css">
    <link rel="stylesheet" href="css/process-denied.css">
    <link rel="stylesheet" href="css/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Copyright</title>
</head>

<body>
    <!--Header section with navigation bar-->
    <header>
        <nav>
            <!--Logo of the website name-->
            <div id="logo"><a href="index.php"><img src="images/logo.png" alt="logo">Eworld</a></div>

            <!--When the website is used in small-screen devices, the navigation icon appears-->
            <label for="dropdown-main" class="toggle" id="main-toggle">
                <span class="navigation-icon"></span>
            </label>
            <input type="checkbox" id="dropdown-main">

            <!--Navigation-->
            <ul class="menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="about-us.php">ABOUT US</a></li>
                <li>
                    <!--This item has a sub menu. When the mouse cursor point on this item, the sub-menu appears-->
                    <label for="dropdown-sub" class="toggle">PRODUCTS <span
                            class="material-icons">expand_more</span></label>
                    <a href="#">PRODUCTS <span class="material-icons">expand_more</span></a>
                    <input type="checkbox" id="dropdown-sub">
                    <ul class="sub-menu">
                        <li><a href="browse-products-1.php">by CATEGORY</a></li>
                        <li><a href="browse-products-2.php">by CREATED TIME</a></li>
                    </ul>
                </li>
                <li><a href="contact-us.php">CONTACT</a></li>
                <li class="your-cart"><a href="your-cart.php">YOUR CART</a></li>
            </ul>
        </nav>
    </header>

    <!--Main content-->
    <main>

        <div class="image">
            <img src="images/copyright.png" alt="a circle with a letter C inside it">
        </div>

        <div class="text-3">
            <h1>COPYRIGHT</h1>
            <h3>Copyright <span class="material-icons">copyright</span> 2021, Eworld Technology Corporation.</h3>
            <h3>All rights reserved.</h3>
        </div>

        <!--Flashing message-->
        <div class="flash-container" id="process-denied">
            <div class="flashing-message">
                <div class="icon">
                    <img src="images/account.jpg" alt="a default avatar">
                </div>
                <h1>Please <a href="../login.php">Login</a> or <a href="../register.php">Register</a> to continue this
                    process.</h1>
            </div>
        </div>

    </main>

    <!--Footer section with navigation bar-->
    <footer>
        <a href="copyright.php">Copyright</a>
        <a href="tos.php">Terms of Service</a>
        <a href="privacypolicy.php">Privacy Policy</a>
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
    <script src="javascript/navbar.js" async></script>
    <script src="../javascript/cookie.js"></script>
</body>

</html>