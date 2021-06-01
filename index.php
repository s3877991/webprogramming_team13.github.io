<?php
session_start();

// If file 'install.php' still exists, the current PHP script in this file will be terminated
if (file_exists('admin/install.php')) {
    die("You have to delete <code>'install.php'</code> file manually to activate the System!");
}

require 'backend/mall_store_functions.php';
require 'backend/product_functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/header-&-footer.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/flexbox.css">
    <link rel="stylesheet" href="css/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
    <title>Shoppiverse - The Universe of Shopping Stores</title>
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
                <li><a class="active" href="index.php">HOME</a></li>
                <li><a href="aboutus.php">ABOUT US</a></li>
                <li><a href="fees.php">FEES</a></li>
                <li>
                    <!--This item has a sub menu. When the mouse cursor point on this item, the sub-menu appears-->
                    <label for="dropdown-sub" class="toggle">STORES <span class="material-icons">expand_more</span></label>
                    <a href="#">STORES <span class="material-icons">expand_more</span></a>
                    <input type="checkbox" id="dropdown-sub">
                    <ul class="sub-menu">
                        <li><a href="browse-store-1.php?letter-start=All&act=Browse">by NAME</a></li>
                        <li><a href="browse-store-2.php?category=All&act=Browse">by CATEGORY</a></li>
                    </ul>
                </li>
                <li><a href="contactus.php">CONTACT US</a></li>
                <li><a href="faqs.php">FAQS</a></li>
                <li><a href="login.php" id="my-account">MY ACCOUNT</a></li>
            </ul>
        </nav>
    </header>

    <!--Main content-->
    <main>

        <!--Banner area-->
        <section id="intro">
            <div class="banner">
                <div class="container">
                    <h1>SHOPPIVERSE</h1>
                    <p>Say Hello to the World Best Shopping Mall</p>
                    <a class="btn" href="#sub-sect-1">LETS GO!</a>
                </div>
            </div>
        </section>

        <!--New Stores Area-->
        <section id="sub-sect-1">
            <h2 class="label">New Stores</h2>
            <?php
            function sort_store()
            {
                $stores = read_all_stores();
                $s_sort = $stores;
                /* turn each value from the 'created_time' column to unix timestamp
                then use array_multisort to sort values from that column in descending order */
                array_multisort(array_map('strtotime', array_column($s_sort, 'created_time')), SORT_DESC, $s_sort);
                return $s_sort;
            }

            echo "<div class=\"flex-container\">";
            $s_sort = sort_store();
            // display all new stores from newest to oldest created
            $count = 0;
            foreach ($s_sort as $sort) {
                $id = $sort['id'];
                $name = $sort['name'];
                echo "<div class=\"item\"><a href=\"store-home.php?store=$id\"><div class=\"image\"><img src=\"images/store.png\" alt=\"a store\"></div><h3 class=\"name\">$name</h3></a></div>";
                $count++;
                if ($count == 10) {
                    break;
                }
            }
            echo "</div>";
            ?>
        </section>

        <hr>

        <!--New Products Area-->
        <section id="sub-sect-2">
            <h2 class="label">New Products</h2>
            <?php
            function sort_product()
            {
                $products = read_all_products();
                $p_sort = $products;
                /* turn each value from the 'created_time' column to unix timestamp
                then use array_multisort to sort those values in descending order */
                array_multisort(array_map('strtotime', array_column($p_sort, 'created_time')), SORT_DESC, $p_sort);
                return $p_sort;
            }

            echo "<div class=\"flex-container\">";
            $p_sort = sort_product();
            $count = 0;
            // display new products from newest to oldest created
            foreach ($p_sort as $sort) {
                $id = $sort['id'];
                $name = $sort['name'];
                $price = $sort['price'];
                echo "<div class=\"item\"><a href=\"product-details.php?id=$id\"><div class=\"image\"><img src=\"images/product.png\" alt=\"a shopping bag\"></div><h3 class=\"name\">$name</h3><p class=\"price\">$$price</p></a></div>";
                $count++;
                if ($count == 10) {
                    break;
                }
            }
            echo "</div>"
            ?>
        </section>

        <hr>

        <!--Featured Stores Area-->
        <section id="sub-sect-3">
            <h2 class="label">Featured Stores</h2>

            <?php
            echo "<div class=\"flex-container\">";
            $stores = read_all_stores();
            // display all featured stores in the csv file using foreach loop
            $count = 0;
            foreach ($stores as $store) {
                if ($store['featured'] == 'TRUE') {
                    $id = $store['id'];
                    $name = $store['name'];
                    echo "<div class=\"item\"><a href=\"store-home.php?store=$id\"><div class=\"image\"><img src=\"images/store.png\" alt=\"a store\"></div><h3 class=\"name\">$name</h3></a></div>";
                    $count++;
                    if ($count == 10) {
                        break;
                    }
                }
            }
            echo "</div>";
            ?>
        </section>

        <hr>

        <!--Featured Products Area-->
        <section id="sub-sect-4">
            <h2 class="label">Featured Products</h2>

            <?php
            echo "<div class=\"flex-container\">";
            $products = read_all_products();
            $count = 0;
            foreach ($products as $product) {
                if ($product['featured_in_mall'] == 'TRUE') {
                    $id = $product['id'];
                    $name = $product['name'];
                    $price = $product['price'];
                    echo "<div class=\"item\"><a href=\"product-details.php?id=$id\"><div class=\"image\"><img src=\"images/product.png\" alt=\"a shopping bag\"></div><h3 class=\"name\">$name</h3><p class=\"price\">$$price</p></a></div>";
                    $count++;
                    if ($count == 10) {
                        break;
                    }
                }
            }
            echo "</div>";
            ?>
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