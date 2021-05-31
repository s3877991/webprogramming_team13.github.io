<?php
    session_start();
    require 'product_functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css-store/header-&-footer.css">
    <link rel="stylesheet" href="css-store/flexbox.css">
    <link rel="stylesheet" href="css-store/store-home.css">
    <link rel="stylesheet" href="css-store/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <!--Header section with navigation bar-->
    <header>
        <nav>
            <!--Logo of the website name-->
            <div id="logo"><a href="store-home.php">The Store</a></div>

            <!--When the website is used in small-screen devices, the navigation icon appears-->
            <label for="dropdown-main" class="toggle" id="main-toggle">
                <span class="navigation-icon"></span>
            </label>
            <input type="checkbox" id="dropdown-main">

            <!--Navigation-->
            <ul class="menu">
                <li><a class="active" href="store-home.php">HOME</a></li>
                <li><a href="store-about-us.php">ABOUT US</a></li>
                <li>
                    <!--This item has a sub menu. When the mouse cursor point on this item, the sub-menu appears-->
                    <label for="dropdown-sub" class="toggle">PRODUCTS <span class="material-icons">expand_more</span></label>
                    <a href="#">PRODUCTS <span class="material-icons">expand_more</span></a>
                    <input type="checkbox" id="dropdown-sub">
                    <ul class="sub-menu">
                        <li><a href="browse-products-1.php">by CATEGORY</a></li>
                        <li><a href="browse-products-2.php">by CREATED TIME</a></li>
                    </ul>
                </li>
                <li><a href="store-contact-us.php">CONTACT</a></li>
                <li><a class="your-cart" href="your-cart.php">YOUR CART</a></li>
            </ul>
        </nav>
    </header>

    <!--Main content-->
    <main>

        <!--Banner area-->
        <section id="intro">
            <div class="banner">
                <div class="container">
                    <h1>The Store</h1>
                    <p>Welcome to one of the best stores in Shoppiverse Mall</p>
                    <button class="btn"><a href="#sub-sect-1">SHOP NOW!</a></button>
                </div>
            </div>
        </section>

        <section id="sub-sect-1">
            <h2 class="label">New Products</h2>
            <div class="flex-container">
                <?php
                $products = read_all_products();
                $products_sorted = $products;
                $dateTime = array_column($products_sorted, 'created_time');
                array_multisort($dateTime, SORT_DESC, $products_sorted);
                // printArray($products_sorted);
                $count = 0;
                foreach ($products_sorted as $p) {
                    $id = $p['id'];
                    $name = $p['name'];
                    $price = $p['price'];
                    echo ("<div class=\"item\"><a href=\"product-details.php?id=$id\"><div class='image'><img src='images/store-product.png' alt='a shopping bag'></div><h3>$name</h3><p class='price'>$price$</p></a></div>");
                    $count++;
                    if ($count == 5) {
                        break;
                    }
                }
                ?>
            </div>
        </section>

        <hr>

        <section id="sub-sect-2">

            <h2 class="label">Featured Products</h2>
            <div class="flex-container">
                <?php
                $count = 0;
                foreach ($products as $p) {
                    if ($p['featured_in_store'] == 'TRUE') {
                        $id = $p['id'];
                        $name = $p['name'];
                        $price = $p['price'];
                        echo ("<div class=\"item\"><a href=\"product-details.php?id=$id\"><div class='image'><img src='images/store-product.png' alt='a shopping bag'></div><h3>$name</h3><p class='price'>$price$</p></a></div>");
                        $count++;
                        if ($count == 5) {
                            break;
                        }
                    }
                }
                ?>
            </div>
        </section>

    </main>

    <!--Footer section with navigation bar-->
    <footer>
        <a href="store-copyright.php">Copyright</a>
        <a href="store-tos.php">Terms of Service</a>
        <a href="store-privacypolicy.php">Privacy Policy</a>
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