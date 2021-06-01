<?php
// Start the session
session_start();

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

/* When they click 'ORDER' button, if users haven't logged in yet, they'll be redirected to 'Register' page. 
Otherwise, they'll be directed to 'Thank you' page. */
if (isset($_POST['check-out'])) {
    if (!isset($_SESSION["email"])) {
        header('location: register.php');
    } else {
        header('location: thankyou.php?store=' . $id);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css-store/header-&-footer.css">
    <link rel="stylesheet" href="css-store/your-cart.css">
    <link rel="stylesheet" href="css-store/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title><?php echo $name . " - "; ?>Your Cart</title>
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
                        <li><a href=\"browse-products-2.php?store=$id\">by CREATED TIME</a></li>
                    </ul>
                </li>
                <li><a href=\"store-contact-us.php?store=$id\">CONTACT</a></li>
                <li class=\"your-cart\"><a class=\"active\" href=\"your-cart.php?store=$id\">YOUR CART</a></li>
            </ul>";
            ?>
        </nav>
    </header>

    <!--Main content-->
    <main>

        <h1>YOUR SHOPPING CART</h1>

        <hr>

        <!--Order Placement Area -->
        <section id="order-plcmnt">
            <div class="small-container cart-page">

                <!--List of products add to cart-->
                <table id='order-table'>
                    <tr>
                        <th><strong>PRODUCT</strong></th>
                        <th><strong>QUANTITY</strong></th>
                        <th><strong>SUB-TOTAL</strong></th>
                    </tr>
                </table>

                <hr>

                <!--Total price-->
                <div class="total-price">

                    <table>
                        <tr>
                            <td><strong>SUB-TOTAL</strong></td>
                            <td id="items-sub-total">$0</td>
                        </tr>

                        <tr>
                            <td><strong>COUPON</strong></td>
                            <td><input type="text" id="coupon"></td>
                        </tr>
                        <tr>
                            <td><strong>TOTAL</strong></td>
                            <td><strong id="total">$0</strong></td>
                        </tr>
                    </table>

                </div>

            </div>
        </section>

        <section id="btn-area">
            <form method="post">
                <div class="button-container">

                    <div class="button">
                        <button type="button" id="continue">
                            <?php
                            echo "<a href=\"store-home.php?store=$id\">Continue Shopping</a>";
                            ?>
                        </button>
                    </div>

                    <div class="button">
                        <button type="submit" id="check-out" name="check-out">ORDER</button>
                    </div>

                </div>
            </form>
        </section>

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
    <script src="javascript/your-cart.js" async></script>
    <script src="javascript/cookie.js"></script>
</body>

</html>