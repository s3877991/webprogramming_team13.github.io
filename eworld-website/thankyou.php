<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/header-&-footer.css">
    <link rel="stylesheet" href="css/generic-text.css">
    <link rel="stylesheet" href="css/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Thank you!</title>
</head>

<body>
    <!--Header section with navigation bar-->
    <header>
        <nav>
            <!--Logo of the website name-->
            <div id="logo"><a href="index.html"><img src="images/logo.png" alt="logo">Eworld</a></div>

            <!--When the website is used in small-screen devices, the navigation icon appears-->
            <label for="dropdown-main" class="toggle" id="main-toggle">
                <span class="navigation-icon"></span>
            </label>
            <input type="checkbox" id="dropdown-main">

            <!--Navigation-->
            <ul class="menu">
                <li><a href="index.html">HOME</a></li>
                <li><a href="about-us.html">ABOUT US</a></li>
                <li>
                    <!--This item has a sub menu. When the mouse cursor point on this item, the sub-menu appears-->
                    <label for="dropdown-sub" class="toggle">PRODUCTS <span
                            class="material-icons">expand_more</span></label>
                    <a href="#">PRODUCTS <span class="material-icons">expand_more</span></a>
                    <input type="checkbox" id="dropdown-sub">
                    <ul class="sub-menu">
                        <li><a href="browse-products-1.html">by CATEGORY</a></li>
                        <li><a href="browse-products-2.html">by CREATED TIME</a></li>
                    </ul>
                </li>
                <li><a href="contact-us.html">CONTACT</a></li>
                <li class="your-cart"><a href="your-cart.html">YOUR CART</a></li>
            </ul>
        </nav>
    </header>

    <!--Main content-->
    <main>

        <div class="image">
            <img src="images/thank-you.png" alt="hands clapsed together">
        </div>

        <div class="text-2">
            <h1>Thank you for your shopping at Eworld store</h1>
            <h1>and</h1>
            <h1>hope to see you again.</h1>
            <h1>Have a nice day!</h1>
        </div>
        
        <div class="btn">
            <a href="../index.html">Exit to Mall page</a>
        </div>

    </main>

    <!--Footer section with navigation bar-->
    <footer>
        <a href="copyright.html">Copyright</a>
        <a href="tos.html">Terms of Service</a>
        <a href="privacypolicy.html">Privacy Policy</a>
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
    <script src="../javascript/cookie.js"></script>
</body>

</html>