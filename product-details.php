<?php
// Start the session
session_start();

// If file 'install.php' still exists, the current PHP script in this file will be terminated
if (file_exists('admin/install.php')) {
    die("You have to delete <code>'install.php'</code> file manually to activate the System!");
}

// Use a function from another PHP file
require 'backend/product_functions.php';
require 'backend/mall_store_functions.php';

// When users click a product in mall pages or store pages, they will be directed to product details page displaying that product.
// If the products they want to access is unavailable. The dead message will appear and the page will be terminated.
if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
} else {
    die('Product not found!');
}

// Set arrays from data files.
$products = read_all_products();
$stores = read_all_stores();
$product = get_product($product_id);
?>

<!-- HTML Code Area -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css-store/header-&-footer.css">
    <link rel="stylesheet" href="css-store/product-details.css">
    <link rel="stylesheet" href="css-store/cookie.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title><?php echo $product['name']; ?></title>
</head>

<body>
    <!--Header section with navigation bar-->
    <header>
        <nav>
            <!--Logo of the website name-->
            <div id="logo">
                <?php
                foreach ($stores as $store) {
                    if ($store['id'] == $product['store_id']) {
                        $store_id = $store['id'];
                        echo "<a href=\"store-home.php?store=$store_id\">";
                        echo $store['name'];
                        echo "</a>";
                        break;
                    }
                }
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
                <li><a href=\"store-home.php?store=$store_id\">HOME</a></li>
                <li><a href=\"store-about-us.php?store=$store_id\">ABOUT US</a></li>
                <li>
                    <!--This item has a sub menu. When the mouse cursor point on this item, the sub-menu appears-->
                    <label for=\"dropdown-sub\" class=\"toggle\">PRODUCTS <span class=\"material-icons\">expand_more</span></label>
                    <a class=\"active\" href=\"#\">PRODUCTS <span class=\"material-icons\">expand_more</span></a>
                    <input type=\"checkbox\" id=\"dropdown-sub\">
                    <ul class=\"sub-menu\">
                        <li><a href=\"browse-products-1.php?store=$store_id\">by CATEGORY</a></li>
                        <li><a href=\"browse-products-2.php?store=$store_id&orderby=none\">by CREATED TIME</a></li>
                    </ul>
                </li>
                <li><a href=\"store-contact-us.php?store=$store_id\">CONTACT</a></li>
                <li class=\"your-cart\"><a href=\"your-cart.php?store=$store_id\">YOUR CART</a></li>
            </ul>";
            ?>
        </nav>
    </header>

    <!--Main Content-->
    <main class="product-info">

        <!--Customer choice area-->
        <section id="customers-choice">
            <div class="flex-container-1">

                <div class="avatar">
                    <img id="product-image" src="images/store-product.png" alt="a shopping bag">
                </div>

                <div class="options">

                    <h1 id="title">
                        <?php
                        echo $product['name'];
                        ?>
                    </h1>
                    <h3 id="price">
                        <?php
                        echo "$" . $product['price'];
                        ?>
                        </h1>
                    </h3>

                    <div class="button-container">
                        <div class="buttons">
                            <button type="button" id="add-to-cart" name="add-to-cart">Add to cart</button>
                        </div>
                        <div class="buttons">
                            <button type="button" id="buy-now">BUY NOW!</button>
                        </div>
                    </div>

                </div>
            </div>

            </div>
        </section>

        <hr>

        <!--Description area-->
        <section class="text">
            <h2 class="label">Description</h2>

            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates magnam deleniti dolores sint molestiae aperiam est aliquid numquam quia dolorum quaerat, at labore. Libero fuga assumenda dolorum similique, possimus in!
            </p>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti in veritatis cupiditate rerum et temporibus porro, delectus quasi atque dolore, dolorum sed nisi, iusto eveniet voluptate quod accusamus officia fugiat?
            </p>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt beatae temporibus eaque ipsa dignissimos, a, laborum minus praesentium ex odio at ullam cupiditate fugit commodi? Similique numquam eveniet ex dolores!
            </p>
        </section>

        <hr>

        <!--Visited products area-->
        <section id="Related-products">

            <h2 class="label">Related Products</h2>
            <?php
            echo "<div class=\"flex-container\">";
            $count = 0;
            foreach ($products as $product) {
                if ($product['store_id'] == $store['id']) {
                    $id = $product['id'];
                    $name = $product['name'];
                    $price = $product['price'];
                    echo "<div class=\"item\"><a href=\"product-details.php?id=$id\"><div class=\"image\"><img src=\"images/store-product.png\" alt=\"a shopping bag\"></div><h3 class=\"name\">$name</h3><p class=\"price\">$$price</p></a></div>";
                    $count++;
                    if ($count == 5) {
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
        <?php
        echo
        "<a href=\"store-copyright.php?store=$store_id\">Copyright</a>
        <a href=\"store-tos.php?store=$store_id\">Terms of Service</a>
        <a href=\"store-privacypolicy.php?store=$store_id\">Privacy Policy</a>";
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
    <script src="javascript/add-to-cart.js"></script>
    <script src="javascript/your-cart.js" async></script>
    <script src="javascript/cookie.js"></script>
</body>

</html>