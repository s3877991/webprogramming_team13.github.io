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
    <title>Terms of Service</title>
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
            <img src="images/store-tos.png" alt="a handshake">
        </div>

        <div class="text">

            <h1>TERMS OF SERVICE</h1>
            <p>
                Welcome to <?php echo $name; ?> store. Before using this website, please read Terms of
                Service below carefully to
                understand your legal rights and duty to us. After that, by using it, you have accepted and agreed with
                these terms of service, as well as our
                privacy policy which can be found <?php echo "<strong><a href=\"store-privacypolicy.php?store=$id\">HERE</a></strong>"; ?>.
                Otherwise, please do not use it or be handled with regulations of the law.

            <h2>Copyright and ownership</h2>
            <p>
                All of the content displayed and featured in our website is owned by The Store. All of the elements in this
                website is protected by the law relating to intellectual property rights. You may not modify, copy,
                distribute, transmit, reproduce or sell any information or work contained in this website. You are
                authorized to view, play, print, download documents, audio, images on this website for informational,
                personal and noncommercial purposes only.
            </p>

            <h2>Products, contents and specification</h2>
            <p>
                All features, content, specifications, products, and prices of products and services described or
                depicted on this Web Site are subject to change at any time without notice. The inclusion of any
                products or services on this Web Site at a particular time does not imply or warrant that these products
                or services will be available at any time
            </p>


            <h2>Shipping limitation</h2>
            <p>
                When an order is placed, it will be shipped to the purchaser through the address that the person
                designated before purchasing. All purchases from this Web Site are made pursuant to a shipment contract.
                As a result, risk of loss and title for items purchased from this Web Site pass to you upon delivery of
                the items to the carrier.
            </p>

            <h2>Accuracy of information</h2>
            <p>
                We attempt to ensure that information on this Web Site is complete, accurate, and current. Despite our
                efforts, the information on this Web Site may occasionally be inaccurate, incomplete, or out of date. We
                reserve the right, without prior notice, to limit the order quantity on any product or service and/or to
                refuse service to any customer. We also may require verification of information prior to the acceptance
                and/or shipment of any order.
            </p>


            <h2>Third-party link</h2>
            <p>
                From time to time, this Web Site may contain links to web sites that are not owned, operated, or
                controlled by adidas or its affiliates. All such links are provided solely as a convenience to you. If
                you use these links, you will leave this Web Site. Neither we nor any of our respective affiliates are
                responsible for any content, materials, or other information located on or accessible from any other web
                site.
            </p>


            <h2>Account security</h2>
            <p>
                You are entirely responsible for the security and confidentiality of your password and account.
                Furthermore, you are entirely responsible for any and all activities that occur under your account. You
                agree to immediately notify us of any unauthorized use of your account or any other breach of security
                of which you become aware. You are responsible for taking precautions and providing security measures
                best suited for your situation and intended use of the Services and Web Site.
            </p>

            <h2>Limitation of liability</h2>
            <p>
                Your use of the Web Site is at your own risk. You agree that our sole obligation to you is to provide
                the
                Web Site “as is.
            </p>

            <p id="note">If you have any questions about these terms of service, You can contact us <?php echo "<strong><a href=\"store-contact-us.php?store=$id\">HERE</a></strong>"; ?>.</p>

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