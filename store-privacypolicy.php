<?php
// If file 'install.php' still exists, the current PHP script in this file will be terminated
if (file_exists('admin/install.php')) {
    die("You have to delete <code>'install.php'</code> file manually to activate the System!");
}

// Use a function from another PHP file
require 'backend/mall_store_functions.php';

// When users click a link in navigation bar store pages, they will be directed to page with that link.
// If that link is unavailable, he dead message will appear and the script in this page will be terminated.
if (isset($_GET['store'])) {
    $store_id = $_GET['store'];
} else {
    die('Page not found!');
}

// Get a store array
$store = get_store($store_id);

// echo "<pre>";
// print_r($store);
// echo "</pre>";

// Get a store name and its id
$name = $store['name'];
$id = $store['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css-store/header-&-footer.css">
    <link rel="stylesheet" href="css-store/generic-text.css">
    <link rel="stylesheet" href="css-store/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Privacy Policy</title>
</head>

<body>
    <!--Header section with navigation bar-->
    <header>
        <nav>
            <!--Logo of the website name-->
            <div id="logo">
                <?php
                echo "<a href=\"store-home.php?store=$id\">$name</a>";
                ?>
            </div>

            <!--When the website is used in small-screen devices, the navigation icon appears-->
            <label for="dropdown-main" class="toggle" id="main-toggle">
                <span class="navigation-icon"></span>
            </label>
            <input type="checkbox" id="dropdown-main">

            <!--Navigation-->
            <?php
            echo
            "<ul class=\"menu\">
                <li><a href=\"store-home.php?store=$id\">HOME</a></li>
                <li><a href=\"store-about-us.php?store=$id\">ABOUT US</a></li>
                <li>
                    <!--This item has a sub menu. When the mouse cursor point on this item, the sub-menu appears-->
                    <label for=\"dropdown-sub\" class=\"toggle\">PRODUCTS <span class=\"material-icons\">expand_more</span></label>
                    <a href=\"#\">PRODUCTS <span class=\"material-icons\">expand_more</span></a>
                    <input type=\"checkbox\" id=\"dropdown-sub\">
                    <ul class=\"sub-menu\">
                        <li><a href=\"browse-products-1.php?store=$id\">by CATEGORY</a></li>
                        <li><a href=\"browse-products-2.php?store=$id&orderby=none\">by CREATED TIME</a></li>
                    </ul>
                </li>
                <li><a href=\"store-contact-us.php?store=$id\">CONTACT</a></li>
                <li class=\"your-cart\"><a href=\"your-cart.php?store=$id\">YOUR CART</a></li>
            </ul>";
            ?>
        </nav>
    </header>

    <!--Main content-->
    <main>
        <div class="image">
            <img src="images/store-privacy-policy.png" alt="a paper with a shield in it">
        </div>

        <div class="text">

            <h1>PRIVACY POLICY</h1>
            <p>
                This privacy policy describes our policies and procedures on the collection, use and disclosure of your
                information when you use the Service and tells you about your privacy rights and how the law protects
                you.
            </p>
            <p>
                We use your personal data to provide and improve the Service. By using the service, you agree to the
                collection and use of information in accordance with this privacy policy.
            </p>

            <h2>When do we collect your data?</h2>
            <p>When you sign up and/or use our services, or when you become our partner.</p>
            <p>
                When you send any type of form, including login form or other forms related to our products or services
                via online or offline.
            </p>
            <p>When you interact with us through our social media platforms, or calls (which are also recorded).</p>
            <p>When you provide us with your feedback or complaints.</p>
            <p>When you send us your personal information for whatever reason.</p>

            <h2>What type of data do we collect from you?</h2>
            <p>Your full name.</p>
            <p>Your gender.</p>
            <p>Your date of birth.</p>
            <p>Your email adresss.</p>
            <p>Your phone number.</p>
            <p>Your purchase information.</p>
            <p>Your credit card number.</p>

            <h2>What do we use your personal data for?</h2>
            <p>To proceed your transaction with us.</p>
            <p>To manage, control and provide you with instructions to use and interact with our services as well as our
                social media platforms.</p>
            <p>To enforce our ToS or any applicable end-users license agreements.</p>
            <p>To identify or verify you.</p>
            <p>To protect other users’ privacy and safety.</p>
            <p>To allow other users to contact you.</p>
            <p>To do researches, analysis, and development.</p>


            <p id="note">If you have any questions about this privacy policy, You can contact us <?php echo "<strong><a href=\"store-contact-us.php?store=$id\">HERE</a></strong>"; ?>.</p>

            <p id="update">Last updated on June 1, 2021.</p>

        </div>

    </main>

    <!--Footer section with navigation bar-->
    <footer>
        <?php
        echo
        "<a href=\"store-copyright.php?store=$id\">Copyright</a>
        <a href=\"store-tos.php?store=$id\">Terms of Service</a>
        <a href=\"store-privacypolicy.php?store=$id\">Privacy Policy</a>";
        ?>
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