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
    <link rel="stylesheet" href="css/generic-text.css">
    <link rel="stylesheet" href="css/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
    <title>Shoppiverse - FAQs</title>
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
                <li><a class="active" href="faqs.php">FAQS</a></li>
                <li><a href="login.php" id="my-account">MY ACCOUNT</a></li>
            </ul>
        </nav>
    </header>

    <!--Main content-->
    <main>
        <section id="faqs">
            <div class="text">
                <h1>FREQUENTLY ASKED QUESTIONS</h1>

                <hr>

                <h2>1/ How do I create a new account?</h3>
                    <p>Go to "My Account" on the navigation bar and choose "Create New Account".</p>

                    <h2>2/ How much is the shipping fee?</h3>
                        <p>
                            The shipping fee will be depend on the distance between your location and our company, there is no
                            fixed cost.
                        </p>

                        <h2>
                            3/ Can I buy from different shops and have my stuff delivered together only once so that I don't
                            have to pay extra shipping fees?
                        </h2>
                        <p>
                            We're sorry to say that it's not possible. Different shops might have different time preparing their
                            products to be delivered, so we're afraid that we can't have everyhing prepared at the same time and
                            deliver to you all in once.
                        </p>

                        <h2>4/ Do you have worldwide shipping service?</h2>
                        <p>Yes, we do offer this service.</p>

                        <h2>5/ Can I order without an account?</h2>
                        <p>
                            You have to create an account in order to add products into your cart and place an order. However,
                            you can
                            still view products without logging in.
                        </p>

                        <h2>6/ Can I cancel an order?</h2>
                        <p>
                            As long as the package is not being delivered yet, you can cancel your order placement without
                            getting any
                            extra charges.
                        </p>

                        <h2>7/ How many stores do you have?</h2>
                        <p>We have 100 stores in total.</p>

                        <h2>8/ Can I return the products and get a refund?</h2>
                        <p>
                            Yes, you can contact us if you want to return the product. However, we only refund if it is the
                            fault of the
                            manufacturer or delivery.
                        </p>

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