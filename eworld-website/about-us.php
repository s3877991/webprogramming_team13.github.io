<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/header-&-footer.css">
    <link rel="stylesheet" href="css/about-us.css">
    <link rel="stylesheet" href="css/process-denied.css">
    <link rel="stylesheet" href="css/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Eworld - About Us</title>
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
                <li><a class="active" href="about-us.php">ABOUT US</a></li>
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

    <!--Main Content-->
    <main>

        <div class="image">
            <img src="images/eworld-banner-2.jpg" alt="a letter e logo with electronic devices below">
        </div>

        <div class="text">
            <h1>ABOUT US</h1>

            <hr>

            <h2>What is Eworld?</h2>
            <p>
                Eworld is one of the world first class retailer store, which is specialized in selling genuine
                technological devices in global markets. It is established in 1990 in New York, USA.
            </p>
            <p>
                For many years, we have gradually become one of the most dependable address to customers from all over
                the world. We always make efforts
                to provide a variety of genuine products with the most reasonable prices in order to meet your needs.
            </p>
            <p>
                Going to Eworld store, you can be comfortable with our reputation and quality of products with their
                prices lower than
                commercial prices by 15%-20%. Besides, we always try our best to provide you with the best service
                experiences.
            </p>

            <h2>Our activity principles</h2>
            <p>
                Eworld always acts by setting customers as our central object. And our effort to reach the expectation
                is to satisfy them with provided
                products and customer service. We are gradually building up outstanding customer service, showing the
                worth of being one of the best worldwide retail stores.
                The trusts and enthusiastic supports from our customers from many branches have partly affirmed our
                staff's performance.
            </p>
            <ul>
                <li>To our customer, we always work with with a spirit of seriousness, honesty and responsibility to
                    bring the best service experience.</li>
                <li>To our colleagues, we always learn, unite and support each other to form a working space with
                    respect and fairness between employees.</li>
                <li>To our partners, Eworld works based on respecting principle, creating community value and growing
                    together.</li>
            </ul>

            <h2>Our visions</h2>
            <p>
                Over the years, we have constantly improved our services at our branches and supported our customers
                through online media. Eworld is committed
                to providing high-quality products with reputable guarantee, getting ready to support them as soon as
                possible.
            </p>
            <p>
                In the future, we will go on expanding our store braches system, aiming to make appearances in all
                countries. Also, we always enhance our service quality, limit
                risks, listen and recieve customers' feedbacks with a view to provide them with the best experience
                while they are shopping in Eworld.
            </p>
            <p>
                To summarize, Eworld hopes to be a pioneer in delivering our newest products to customers as soon as
                possible, forming a mordern life where technology
                connects and serves people.
            </p>

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